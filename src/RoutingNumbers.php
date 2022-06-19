<?php

declare(strict_types=1);

namespace AdrianMejias\RoutingNumbers;

use AdrianMejias\RoutingNumbers\Exceptions\RoutingNumbersException;
use Illuminate\Support\Facades\Http;

/**
 * Routing Numbers Class
 *
 * @package AdrianMejias\RoutingNumbers
 */
class RoutingNumbers implements \AdrianMejias\RoutingNumbers\Contracts\RoutingNumbersContract
{
    /**
     * The Routing Numbers API URL.
     *
     * @var string
     */
    private string $baseUri = 'https://www.routingnumbers.info';

    /** @inheritDoc */
    public function baseUri(string $endpoint): string
    {
        return $this->baseUri . '/' . ltrim($endpoint, '/');
    }

    /** @inheritDoc */
    public function isValidateRoutingNumber(
        $routingNumber,
        string $countryCode = 'US'
    ): bool {
        if (in_array(
            $countryCode,
            ['US', 'CA', 'MX']
        ) && preg_match('/^[0-9]{3,17}$/', $routingNumber)) {
            return true;
        }

        if ($countryCode === 'UK' && preg_match(
            '/^[0-9]{8}$/',
            $routingNumber
        )) {
            return true;
        }

        return false;
    }

    /** @inheritDoc */
    public function bankName(
        $routingNumber,
        string $countryCode = 'US',
        ?string $callback = null
    ): array {
        if (! $this->isValidateRoutingNumber($routingNumber, $countryCode)) {
            throw new RoutingNumbersException(
                'Invalid routing number: Suppoted formats are: ' . implode(', ', [
                    'US: 3-17 digits',
                    'CA: 3-17 digits',
                    'MX: 3-17 digits',
                    'UK: 8 digits',
                ])
            );
        }

        return Http::get($this->baseUri('/api/name.json'), [
            'rn' => $routingNumber,
            'callback' => $callback,
        ])->throw(RoutingNumbersException::class)->json();
    }

    /** @inheritDoc */
    public function bankData(
        $routingNumber,
        string $countryCode = 'US',
        ?string $callback = null
    ): array {
        if (! $this->isValidateRoutingNumber($routingNumber, $countryCode)) {
            throw new RoutingNumbersException(
                'Invalid routing number: Suppoted formats are: ' . implode(', ', [
                    'US: 3-17 digits',
                    'CA: 3-17 digits',
                    'MX: 3-17 digits',
                    'UK: 8 digits',
                ])
            );
        }

        return Http::get($this->baseUri('/api/data.json'), [
            'rn' => $routingNumber,
            'callback' => $callback,
        ])->throw(RoutingNumbersException::class)->json();
    }
}
