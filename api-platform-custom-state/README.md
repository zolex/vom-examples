# VOM with API-Platform

When working with API-Platform and Custom StateProviders and or StateProcessors there are several options to normalize and denormalize the ApiResources.

To explicitly use VOM, simply type-hint the `VersatileObjectMapper` wherever you need it

Another option is to  type-hint Symfony's `SerializerInterface`, `NormalizerInterface` or `DenormalizerInterface`.
VOM integrates with the standard symfony serializer, so that calling the `serialize()`, `deserialize()`, `normalize()` and `denormalize()` methods on the `Serializer` will also invoke VOM if it finds a `VOM\Model`.

> [!NOTE] 
> When using the Symfony Serializer instead of VOM directly, you need to pass `'vom' => true` in the context to enable it.

## Run the example

Download the [Symfony-CLI](https://symfony.com/download) or serve it with php directly.

```bash
composer install --no-dev

symfony serve
# or alternatively
# php -S localhost:8000 ./public/index.php
```

Open `http://localhost:8000/api` in your browser :)
