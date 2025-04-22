<?php

namespace Glowie\Plugins\BrValidator\Rules;

class Cnpj implements Rule
{
    public static function validate($value)
    {
        if (!isset($value) || !is_string($value)) return false;
        $cnpj = preg_replace('/[^0-9]/', '', $value);
        if (strlen($cnpj) !== 14) return false;
        if (preg_match('/(\d)\1{13}/', $cnpj)) return false;
        $soma1 = 0;
        $peso1 = [5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];
        for ($i = 0; $i < 12; $i++) $soma1 += $cnpj[$i] * $peso1[$i];
        $resto1 = $soma1 % 11;
        $digito1 = ($resto1 < 2) ? 0 : 11 - $resto1;
        $soma2 = 0;
        $peso2 = [6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];
        for ($i = 0; $i < 13; $i++) $soma2 += $cnpj[$i] * $peso2[$i];
        $resto2 = $soma2 % 11;
        $digito2 = ($resto2 < 2) ? 0 : 11 - $resto2;
        return ($cnpj[12] == $digito1 && $cnpj[13] == $digito2);
    }
}
