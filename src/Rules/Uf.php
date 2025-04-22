<?php

namespace Glowie\Plugins\BrValidator\Rules;

class Uf implements Rule
{
    private const UF = [
        'AC',
        'AL',
        'AP',
        'AM',
        'BA',
        'CE',
        'DF',
        'ES',
        'GO',
        'MA',
        'MT',
        'MS',
        'MG',
        'PA',
        'PB',
        'PR',
        'PE',
        'PI',
        'RJ',
        'RN',
        'RS',
        'RO',
        'RR',
        'SC',
        'SP',
        'SE',
        'TO'
    ];

    public static function validate($value)
    {
        if (!isset($value) || !is_string($value)) return false;
        return in_array($value, self::UF);
    }
}
