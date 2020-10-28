.PHONY: all
all: format test

.PHONY: format
format:
	composer format

.PHONY: test
test:
	composer test

.PHONY: update
update:
	composer update
	composer validate
