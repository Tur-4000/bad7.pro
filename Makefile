install:
	composer install
	npm install

start:
	php artisan serve

build:
	npm run dev

watch:
	npm run watch

.PHONY: build