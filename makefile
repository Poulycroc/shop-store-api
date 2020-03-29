dev:
	make -j 2 serve watch

serve:
	php -S localhost:8000 -t public
watch:
	npm run watch

update:
	@composer.phar clear-cache
	@composer.phar update

autoload:
	@composer.phar dump-autoload

migrate:
	php artisan migrate
seed:
	php artisan db:seed

init-database:
	make migrate
	make autoload
	make seed

clear:
	@composer.phar clear-cache
	@composer.phar dump-autoload -o

init-build: 
	touch database/database.sqlite
	make install
	make init-database

clear-install:
	rm -rf vendor
	rm -rf node_modules
	make clear
	make install
	php artisan migrate:refresh --seed
	make seed

clear-db:
	echo "" > database/database.sqlite
	php artisan migrate:refresh --seed

migration:
	php artisan make:migration create_$(name)_table

install:
	npm i
	@composer.phar install