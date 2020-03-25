serve:
	php -S localhost:8000 -t public

update:
	composer clear-cache
	composer update

autload:
	composer dump-autload

migrate:
	php artisan migrate

clear:
	composer clear-cache
	composer dump-autoload -o

build: 
	touch database/database.sqlite
	make install

clear-install:
	rm -rf vendor
	rm -rf node_modules
	make clear
	make install

install:
	npm i
	composer install