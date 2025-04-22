<?php

namespace Glowie\Plugins\BrValidator\Rules;

class CpfOrCnpj implements Rule
{
    public static function validate($value)
    {
        if (!isset($value) || !is_string($value)) return false;
        return Cpf::validate($value) || Cnpj::validate($value);
    }
}
