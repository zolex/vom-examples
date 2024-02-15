# API-Platform (API Pack with Doctrine)

By default, API-Platform comes with Doctrine StateProviders and StateProcessors.
Simply add `'vom' => true` to the normalization and/or denormalization context of an operation to enable the transformation.

This could be used to create additional endpoints, that accept or return the transformed data for legacy clients like in the [example Person resource](./src/Entity/Person.php). 

## Run the example

Download the [Symfony-CLI](https://symfony.com/download) or serve it with php directly.

```bash
composer install --no-dev
bin/console doctrine:migrations:migrate --no-interaction

symfony serve
# or alternatively
# php -S localhost:8000 ./public/index.php
```

Open `http://localhost:8000/api` in your browser.
