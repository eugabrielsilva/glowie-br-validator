<?php

namespace Glowie\Plugins\BrValidator\Rules;

/**
 * Regra de validação de CPF.
 * @author Gabriel Silva
 * @package eugabrielsilva/glowie-br-validator
 * @license MIT
 */
class Cpf implements Rule
{
    /**
     * Validar o dado.
     * @param mixed $value Dado a ser validado.
     * @return bool Retorna true para válido, false para inválido.
     */
    public static function validate($value)
    {
        if (!isset($value) || !is_string($value)) return false;
        $cpf = preg_replace('/[^0-9]/', '', $value);
        if (mb_strlen($cpf) !== 11) return false;
        if (preg_match('/(\d)\1{10}/', $cpf)) return false;
        $soma1 = 0;
        for ($i = 0, $peso = 10; $i < 9; $i++, $peso--) $soma1 += $cpf[$i] * $peso;
        $resto1 = $soma1 % 11;
        $digito1 = ($resto1 < 2) ? 0 : 11 - $resto1;
        $soma2 = 0;
        for ($i = 0, $peso = 11; $i < 10; $i++, $peso--) $soma2 += $cpf[$i] * $peso;
        $resto2 = $soma2 % 11;
        $digito2 = ($resto2 < 2) ? 0 : 11 - $resto2;
        return ($cpf[9] == $digito1 && $cpf[10] == $digito2);
    }
}
