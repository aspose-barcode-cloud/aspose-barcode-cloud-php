.PHONY: all
all: format test

.PHONY: format
format:
	composer format

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
