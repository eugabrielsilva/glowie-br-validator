<?php

namespace Glowie\Plugins\BrValidator\Rules;

/**
 * Regra de validação de CEP.
 * @author Gabriel Silva
 * @package eugabrielsilva/glowie-br-validator
 * @license MIT
 */
class Cep implements Rule
{
    /**
     * Validar o dado.
     * @param mixed $value Dado a ser validado.
     * @return bool Retorna true para válido, false para inválido.
     */
    public static function validate($value)
    {
        if (!isset($value) || !is_string($value)) return false;
        $cep = preg_replace('/[^0-9]/', '', $value);
        return mb_strlen($cep) === 8;
    }
}
