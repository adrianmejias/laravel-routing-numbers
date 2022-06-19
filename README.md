# Laravel Routing Numbers

Laravel API for ACH/NACHA Bank Routing Numbers

## Installation

This version supports `PHP 8.0 or 8.1`. You can install the package via composer:

`composer require adrianmejias/laravel-routing-numbers`

To create the `config/routing-numbers.php` configuration file:

`php artisan vendor:publish --tag=routing-numbers`

## Usage

### Example

```php
<?php

use RoutingNumbers;

$bank = RoutingNumbers::bankName('021000021');
```

Expected Output:
```php
$bank = [
    'rn' => '021000021',
    'code' => 200,
    'message' => 'OK',
    'name' => 'JPMORGAN CHASE',
];
```

### Api Requests

- `RoutingNumbers::bankName($routingNumber)` - Get bank name from routing number.
- `RoutingNumbers::bankData($routingNumber)` - Get bank data from routing number.

## Testing

`composer test`

## Contributing

Thank you for considering contributing to Laravel Open Ai! You can read the contribution guide [here](.github/CONTRIBUTING.md).

## Code of Conduct

In order to ensure that the community is welcoming to all, please review and abide by the [Code of Conduct](.github/CODE_OF_CONDUCT.md).

## Security Vulnerabilities

Please see the [security file](SECURITY.md) for more information.

## License

The MIT License (MIT). Please see the [license file](LICENSE.md) for more information.
