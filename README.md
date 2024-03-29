# Routing Numbers API for Laravel

[![security](https://github.com/adrianmejias/laravel-routing-numbers/actions/workflows/security.yml/badge.svg)](https://github.com/adrianmejias/laravel-routing-numbers/actions/workflows/security.yml) [![tests](https://github.com/adrianmejias/laravel-routing-numbers/actions/workflows/tests.yml/badge.svg)](https://github.com/adrianmejias/laravel-routing-numbers/actions/workflows/tests.yml) [![PHPStan](https://github.com/adrianmejias/laravel-routing-numbers/actions/workflows/phpstan.yml/badge.svg)](https://github.com/adrianmejias/laravel-routing-numbers/actions/workflows/phpstan.yml) [![PHP CS Fixer](https://github.com/adrianmejias/laravel-routing-numbers/actions/workflows/php-cs-fixer.yml/badge.svg)](https://github.com/adrianmejias/laravel-routing-numbers/actions/workflows/php-cs-fixer.yml) [![StyleCI](https://github.styleci.io/repos/446770602/shield?branch=main)](https://github.styleci.io/repos/446770602?branch=main) [![Build Status](https://travis-ci.com/adrianmejias/laravel-routing-numbers.svg?branch=main)](https://travis-ci.com/adrianmejias/laravel-routing-numbers) [![codecov](https://codecov.io/gh/adrianmejias/laravel-routing-numbers/branch/main/graph/badge.svg?token=7TCWYB1YV6)](https://codecov.io/gh/adrianmejias/laravel-routing-numbers) ![Downloads](https://img.shields.io/packagist/dt/adrianmejias/laravel-routing-numbers) ![Packagist](https://img.shields.io/packagist/v/adrianmejias/laravel-routing-numbers) [![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT) ![Liberapay](https://img.shields.io/liberapay/patrons/adrianmejias.svg?logo=liberapay)

ACH/NACHA Bank Routing Numbers API package courtesy of https://www.routingnumbers.info/ for [Laravel](https://laravel.com/).

## Installation

This version supports `PHP 8.0 or 8.1`. You can install the package via composer:

`composer require adrianmejias/laravel-routing-numbers`

## Usage

### Example

```php
<?php

use RoutingNumbers;

$bank = RoutingNumbers::bankName('021000021');
```

Expected Output:
```php
$bank = 'JPMORGAN CHASE';
```

### Api Requests

- `RoutingNumbers::bankName($routingNumber)` - Get bank name from routing number.
- `RoutingNumbers::bankData($routingNumber)` - Get bank data from routing number.

## Testing

`composer test`

## Contributing

Thank you for considering contributing to Laravel Routing Numbers! You can read the contribution guide [here](.github/CONTRIBUTING.md).

## Code of Conduct

In order to ensure that the community is welcoming to all, please review and abide by the [Code of Conduct](.github/CODE_OF_CONDUCT.md).

## Security Vulnerabilities

Please see the [security file](SECURITY.md) for more information.

## License

The MIT License (MIT). Please see the [license file](LICENSE.md) for more information.
