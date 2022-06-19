<?php

declare(strict_types=1);

namespace AdrianMejias\RoutingNumbers\Rules;

/**
 * Routing Number Rule
 *
 * @package AdrianMejias\RoutingNumbers\Rules
 */
class RoutingNumberRule extends \Illuminate\Validation\Rules\AbstractRule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        if (preg_match('/^[0-9]{3,17}$/', $value)) {
            return true;
        }

        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return 'The :attribute is not a valid routing number.';
    }
}
