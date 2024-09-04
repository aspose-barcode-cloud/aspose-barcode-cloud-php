.PHONY: all
all: format test lint

.PHONY: format
format:
	composer format

.PHONY: lint
lint:
	composer lint

.PHONY: test
test:
	composer test
	./scripts/run_snippets.sh

.PHONY: init
init:
	composer install

.PHONY: update
update:
	composer update
	composer validate

.PHONY: insert-example
insert-example:
	./scripts/insert-example.bash

.PHONY: after-gen
after-gen: format insert-example
	./scripts/add-deprecation-warnings.bash
