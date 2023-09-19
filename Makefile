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

.PHONY: init
init:
	composer install

.PHONY: update
update:
	composer update
	composer validate

.PHONY: after-gen
after-gen: format
	./scripts/add-deprecation-warnings.bash
