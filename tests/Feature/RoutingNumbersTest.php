<?php

declare(strict_types=1);

namespace AdrianMejias\RoutingNumbers\Tests\Feature;

use RoutingNumbers;

it('should handle bank name')->expect(
    fn () => RoutingNumbers::bankName('021000021')
)->toBeString()->toBe('JPMORGAN CHASE');

it('should handle bank data')->expect(
    fn () => RoutingNumbers::bankData('021000021')
)->toBeArray()->toHaveKeys([
    'change_date',
    'rn',
    'telephone',
    'customer_name',
    'record_type_code',
    'routing_number',
    'code',
    'data_view_code',
    'zip',
    'message',
    'new_routing_number',
    'office_code',
    'institution_status_code',
    'city',
    'state',
    'address',
])->code->toBe(200)->message->toBe('OK');
