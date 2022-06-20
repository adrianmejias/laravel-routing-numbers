<?php

declare(strict_types=1);

namespace AdrianMejias\RoutingNumbers\Providers;

class RoutingNumbersServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            \AdrianMejias\RoutingNumbers\Contracts\RoutingNumbersContract::class,
            \AdrianMejias\RoutingNumbers\RoutingNumbers::class
        );

        $this->app->singleton(
            \AdrianMejias\RoutingNumbers\Contracts\RoutingNumbersContract::class,
            \AdrianMejias\RoutingNumbers\RoutingNumbers::class
        );

        $this->app->alias(
            \AdrianMejias\RoutingNumbers\Contracts\RoutingNumbersContract::class,
            'routing-numbers'
        );
    }
}
