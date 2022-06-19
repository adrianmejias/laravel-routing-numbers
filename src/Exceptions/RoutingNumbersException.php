<?php

declare(strict_types=1);

namespace AdrianMejias\RoutingNumbers\Exceptions;

/**
 * Routing Numbers Exception
 *
 * @package AdrianMejias\RoutingNumbers\Exceptions
 */
class RoutingNumbersException extends \Exception
{
    /**
     * RoutingNumbersException constructor.
     *
     * @param string $message
     * @param int $code
     * @param \Throwable|null $previous
     * @return void
     */
    public function __construct(
        string $message = '',
        int $code = 0,
        \Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
