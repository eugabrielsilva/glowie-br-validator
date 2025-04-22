<?php

namespace Glowie\Plugins\BrValidator\Rules;

class Cellphone implements Rule
{
    public static function validate($value)
    {
        if (!isset($value) || !is_string($value)) return false;
        $pattern = '/^\d{4,5}-\d{4}$/';
        return preg_match($pattern, $value) === 1;
    }
}
