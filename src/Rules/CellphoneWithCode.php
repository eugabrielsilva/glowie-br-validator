<?php

namespace Glowie\Plugins\BrValidator\Rules;

/**
 * Regra de validação de celular com DDD e código do país.
 * @author Gabriel Silva
 * @package eugabrielsilva/glowie-br-validator
 * @license MIT
 */
class CellphoneWithCode implements Rule
{
    /**
     * Validar o dado.
     * @param mixed $value Dado a ser validado.
     * @return bool Retorna true para válido, false para inválido.
     */
    public static function validate($value)
    {
        if (!isset($value) || !is_string($value)) return false;
        $pattern = '/^\+\d{1,3}\s?\(\d{2}\)\s?\d{4,5}-\d{4}$/';
        return preg_match($pattern, $value) === 1;
    }
}
