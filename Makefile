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
	sudo apt install php-parser
	composer install

.PHONY: update
update:
	composer update
	composer validate
