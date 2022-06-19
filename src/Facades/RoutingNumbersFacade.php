<?php

declare(strict_types=1);

namespace AdrianMejias\RoutingNumbers\Facades;

/**
 * Routing Numbers Facade
 *
 * @package AdrianMejias\RoutingNumbers\Facades
 * @method static string baseUri()
 * @method static string endpoint()
 * @method static string endpointUrl()
 * @method static bool isValidateRoutingNumber(int|string $routingNumber, string $countryCode = 'US')
 * @method static array bankData(int|string $routingNumber, string $countryCode = 'US', ?string $callback = null)
 */
class RoutingNumbersFacade extends \Illuminate\Support\Facades\Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'routing-numbers';
    }
}
