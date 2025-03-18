.PHONY: example help
.DEFAULT_GOAL:=help

example:
	composer install
	php bin/console doctrine:migrations:migrate --no-interaction
	php -S 0.0.0.0:8000 public/index.php

help: ## Display this help
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'
