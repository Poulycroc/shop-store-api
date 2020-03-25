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

install:
	composer install