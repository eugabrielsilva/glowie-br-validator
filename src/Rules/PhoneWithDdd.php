<?php

namespace Glowie\Plugins\BrValidator\Rules;

class PhoneWithDdd implements Rule
{
    public static function validate($value)
    {
        if (!isset($value) || !is_string($value)) return false;
        $pattern = '/^\(\d{2}\)\s?\d{4}-\d{4}$/';
        return preg_match($pattern, $value) === 1;
    }
}
