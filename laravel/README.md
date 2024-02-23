# VOM with Laravel

When working with Laravel, the `VersatileObjectMapper` is registered for Dependency Injection.
So all you need to do to get the VOM service, is type-hinting it wherever you need it. [See the controller](./app/Http/Controllers/ExampleController.php) included in this example.

If you prefer you can also get a VOM instance using `app()` or `resolve()` etc.

```php
$objectMapper = resolve(VersatileObjectMapper::class);
$objectMapper = app(VersatileObjectMapper::class);
```

## Run the example

```bash
composer install --no-dev

php artisan serve

curl http://127.0.0.1:8000/api/example/normalize
```
