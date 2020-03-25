serve:
	php -S localhost:8000 -t public

update:
	composer clear-cache
	composer update

autload:
	composer dump-autload

install:
	composer install