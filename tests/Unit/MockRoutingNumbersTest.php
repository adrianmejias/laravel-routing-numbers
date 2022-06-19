<?php

declare(strict_types=1);

namespace AdrianMejias\RoutingNumbers\Tests\Unit;

use RoutingNumbers;

it('should handle mock bank name', function () {
    $routingNumber = '021000021';
    $data = [
        'rn' => '021000021',
        'code' => 200,
        'message' => 'OK',
        'name' => 'JPMORGAN CHASE',
    ];

    RoutingNumbers::shouldReceive('bankName')->once()
        ->with($routingNumber)->andReturn($data);

    $result = RoutingNumbers::bankName($routingNumber);
    expect($result)->toBeArray()->toBe($data);
});

it('should handle mock bank data', function () {
    $routingNumber = '021000021';
    $data = [
        'change_date' => '082416',
        'rn' => '021000021',
        'telephone' => '813-432-3700',
        'customer_name' => 'JPMORGAN CHASE',
        'record_type_code' => 1,
        'routing_number' => '021000021',
        'code' => 200,
        'data_view_code' => 1,
        'zip' => 33610,
        'message' => 'OK',
        'new_routing_number' => '000000000',
        'office_code' => 'O',
        'institution_status_code' => 1,
        'city' => 'TAMPA',
        'state' => 'FL',
        'address' => '3RD FLOOR',
    ];

    RoutingNumbers::shouldReceive('bankData')->once()
        ->with($routingNumber)->andReturn($data);

    $result = RoutingNumbers::bankData($routingNumber);
    expect($result)->toBeArray()->toBe($data);
});
