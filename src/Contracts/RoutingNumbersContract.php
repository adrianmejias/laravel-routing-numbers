<?php

declare(strict_types=1);

namespace AdrianMejias\RoutingNumbers\Contracts;

/**
 * Routing Numbers Contract
 *
 * @package AdrianMejias\RoutingNumbers\Contracts
 */
interface RoutingNumbersContract
{
    /**
     * The Routing Numbers API URL.
     *
     * @param string $endpoint
     * @return string
     */
    public function baseUri(string $endpoint): string;

    /**
     * Check if the Routing Number is valid for the specified country.
     *
     * @param int|string $routingNumber The routing number to get data from.
     * @param string $countryCode The country code of the routing number.
     */
    public function isValidateRoutingNumber(
        $routingNumber,
        string $countryCode = 'US'
    ): bool;

    /**
     * Get bank name from routing number.
     *
     * @param int|string $routingNumber The routing number to get data from.
     * @param string $countryCode The country code of the routing number.
     * @param null|string $callback (optional) name of the JSONP callback function.
     * @return string
     * @throws \AdrianMejias\RoutingNumbers\Exceptions\RoutingNumbersException
     */
    public function bankName(
        $routingNumber,
        string $countryCode = 'US',
        ?string $callback = null
    ): string;

    /**
     * Get bank data from routing number.
     *
     * @param int|string $routingNumber The routing number to get data from.
     * @param string $countryCode The country code of the routing number.
     * @param null|string $callback (optional) name of the JSONP callback function.
     * @return mixed
     * @throws \AdrianMejias\RoutingNumbers\Exceptions\RoutingNumbersException
     */
    public function bankData(
        $routingNumber,
        string $countryCode = 'US',
        ?string $callback = null
    ): mixed;
}
