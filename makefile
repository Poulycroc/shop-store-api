serve:
	php -S localhost:8000 -t public

autload:
	composer dump-autload

install:
	composer install