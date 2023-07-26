from __future__ import division, print_function

import argparse
import re

COMMENT_SECTION_START_RE = re.compile(r"^\s+/\*\*$")  # /**
DEPRECATED_RE = re.compile(  # * @param type $name DEPRECATED: Message
    r"^\s*\*\s+@param\s+(?P<type>\S+)\s+(?P<property_name>\S+)\s+"
    r"DEPRECATED:\s+(?P<message>.+)$"
)
SETTER_FUNCTION_RE = re.compile(
    r"^\s*public\s+function\s+set\S+"
)  # public function setSomething(value)
FUNCTION_BODY_STARTED_RE = re.compile(r"^(?P<indent>\s*){$")  # {


def main(input_file):
    filename = input_file.name
    content = [line.rstrip() for line in input_file.readlines()]
    input_file.close()

    with open(filename, "wt", newline="\n") as result:
        comment_section_started = False
        deprecation_message = None
        setter_function_declaration = False

        for line in content:
            if COMMENT_SECTION_START_RE.match(line):
                comment_section_started = True

            deprecated_match = DEPRECATED_RE.match(line)
            if comment_section_started and deprecated_match:
                # deprecation message found
                deprecation_message = deprecated_match.groupdict()["message"].strip()
                property_name = deprecated_match.groupdict()["property_name"]

            if (
                comment_section_started
                and deprecation_message
                and SETTER_FUNCTION_RE.match(line)
            ):
                setter_function_declaration = True

            match_with_indent = FUNCTION_BODY_STARTED_RE.match(line)
            if match_with_indent:
                # Function body started
                if setter_function_declaration and deprecation_message:
                    result.write(line + "\n")

                    indent = match_with_indent.groupdict()["indent"]
                    escaped_message = "".join(
                        r"\'" if c == "'" else c for c in deprecation_message
                    )
                    result.write(
                        f"{indent}{(' ' * 4)}"
                        f"trigger_error('Property {property_name} is deprecated. {escaped_message}'"
                        ", E_USER_DEPRECATED);\n"
                    )

                    comment_section_started = False
                    setter_function_declaration = False
                    deprecation_message = None

                    continue

                comment_section_started = False
                setter_function_declaration = False
                deprecation_message = None

            result.write(line + "\n")


def parse_args():
    parser = argparse.ArgumentParser()
    parser.add_argument("input_file", type=argparse.FileType("rt"))
    args = parser.parse_args()
    return vars(args)


if __name__ == "__main__":
    main(**parse_args())
