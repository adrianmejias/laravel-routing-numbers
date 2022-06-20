<?php

declare(strict_types=1);

namespace AdrianMejias\RoutingNumbers\Providers;

class RoutingNumbersServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                dirname(__DIR__, 2) . '/config/routing-numbers.php' => config_path('routing-numbers.php'),
            ], 'config');
        }
    }

    public function register(): void
    {
        $this->mergeConfigFrom(
            dirname(__DIR__, 2) . '/config/routing-numbers.php',
            'routing-numbers'
        );

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
