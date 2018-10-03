# AUTHOR: Attila Lakatos


make: update


.PHONY: update
update:
	@git pull --all -v


.PHONY: version
version:
	@php artisan --version
	@composer --version
	@php -r 'print("PHP version ".phpversion()."\n");'


.PHONY: validate
validate:
	@composer validate -vvv --no-interaction
	@composer diagnose -vvv --no-interaction


.PHONY: check
check:
ifeq ($(wildcard .env),)
	$(warning Please run 'cp .env.example .env' and initialize the enviroment variables in '.env' file!)
	$(error File '.env' does not exist)
else ifeq ($(shell grep -e '^APP_KEY=.*$$' .env | sed 's/[^=]*=//'),)
	$(warning Please run 'php artisan key:generate' or 'make key'!)
	$(error Environment variable 'APP_KEY' in '.env' file is not initialized)
else ifeq ($(shell grep -e '^DB_DATABASE=.*$$' .env | sed 's/[^=]*=//'),)
	$(warning Please initialize the 'DB_DATABASE' enviroment variable in '.env' file!)
	$(error Environment variable 'DB_DATABASE' in '.env' file is not initialized)
else ifeq ($(shell grep -e '^DB_USERNAME=.*$$' .env | sed 's/[^=]*=//'),)
	$(warning Please initialize the 'DB_USERNAME' enviroment variable in '.env' file!)
	$(error Environment variable 'DB_USERNAME' in '.env' file is not initialized)
else ifeq ($(shell grep -e '^DB_PASSWORD=.*$$' .env | sed 's/[^=]*=//'),)
	$(warning Please initialize the 'DB_PASSWORD' enviroment variable in '.env' file!)
	$(error Environment variable 'DB_PASSWORD' in '.env' file is not initialized)
endif


.PHONY: key
key:
	@php artisan key:generate -vvv --no-interaction


#############################################
# RESET


.PHONY: reset
reset: check clean reset-database reset-migrations


.PHONY: reset-migrations
reset-migrations:
	@composer dump-autoload -vvv --no-interaction
	@php artisan migrate:reset -vvv --no-interaction
	@php artisan migrate -vvv --no-interaction
	@php artisan migrate:status -vvv --no-interaction
	@php artisan db:seed -vvv --no-interaction


.PHONY: reset-database
reset-database: check
	@ \
		DB_DATABASE=$$(grep -e '^DB_DATABASE=.*$$' .env | sed 's/[^=]*=//'); \
		DB_USERNAME=$$(grep -e '^DB_USERNAME=.*$$' .env | sed 's/[^=]*=//'); \
		DB_PASSWORD=$$(grep -e '^DB_PASSWORD=.*$$' .env | sed 's/[^=]*=//'); \
		DB_CMD="drop database $${DB_DATABASE}; create database $${DB_DATABASE};"; \
		mysql -u "$${DB_USERNAME}" -p"$${DB_PASSWORD}" -e "$${DB_CMD}" -vvv


#############################################
# CLEAN


.PHONY: clear
clear: clean


.PHONY: clean
clean:
	@find storage/framework/views/ -type f ! -name ".gitignore" -exec rm -rfv {} \;
	@php artisan cache:clear -vvv --no-interaction
	@php artisan config:clear -vvv --no-interaction
	@php artisan clear-compiled -vvv --no-interaction
	@php artisan view:clear -vvv --no-interaction
	@php artisan route:clear -vvv --no-interaction
	@php artisan auth:clear-resets -vvv --no-interaction
	@composer clearcache -vvv --no-interaction

