.PHONY: all
all: format lint test

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
	composer global require friendsofphp/php-cs-fixer

.PHONY: update
update:
	composer update
	composer validate
