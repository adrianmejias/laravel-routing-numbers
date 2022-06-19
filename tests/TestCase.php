<?php

declare(strict_types=1);

namespace AdrianMejias\RoutingNumbers\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;

/** @inheritDoc */
class TestCase extends BaseTestCase
{
    /** @inheritDoc */
    protected $loadEnvironmentVariables = true;

    /** @inheritDoc */
    protected function getPackageProviders($app): array
    {
        return [
            \AdrianMejias\RoutingNumbers\Providers\RoutingNumbersServiceProvider::class,
        ];
    }

    /** @inheritDoc */
    protected function getPackageAliases($app): array
    {
        return [
            'RoutingNumbers' => \AdrianMejias\RoutingNumbers\Facades\RoutingNumbersFacade::class,
            'Http' => \Illuminate\Support\Facades\Http::class,
        ];
    }

    /** @inheritDoc */
    public function ignorePackageDiscoveriesFrom(): array
    {
        return [];
    }
}
