# Dottp

[![Build Status](https://travis-ci.org/extphp/dottp.svg?branch=master)](https://travis-ci.org/extphp/dottp)
[![Latest Stable Version](https://poser.pugx.org/extphp/dottp/v/stable)](https://packagist.org/packages/extphp/dottp)
[![License](https://poser.pugx.org/extphp/dottp/license)](https://packagist.org/packages/extphp/dottp)
[![Total Downloads](https://poser.pugx.org/extphp/dottp/downloads)](https://packagist.org/packages/extphp/dottp)


A basic wrapper around Guzzle that allows reading api responses using dot notation


## Usage

```php
<?php

use ExtPHP\Dottp\Dottp;

$client = new Dottp();
$response = $client->get('https://api.example.org/api/v1/foo');

echo $response->get('foo.bar');

// or you can use the very simple syntax
echo Dottp::get('https://api.example.org/api/v1/foo')->get('foo.bar');
```

## Testing
```bash
php vendor/bin/phpunit
```
