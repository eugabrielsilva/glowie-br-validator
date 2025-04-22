<?php

namespace Glowie\Plugins\BrValidator\Rules;

/**
 * Regra de validação de telefone.
 * @author Gabriel Silva
 * @package eugabrielsilva/glowie-br-validator
 * @license MIT
 */
class Phone implements Rule
{
    /**
     * Validar o dado.
     * @param mixed $value Dado a ser validado.
     * @return bool Retorna true para válido, false para inválido.
     */
    public static function validate($value)
    {
        if (!isset($value) || !is_string($value)) return false;
        $pattern = '/^\d{4}-\d{4}$/';
        return preg_match($pattern, $value) === 1;
    }
}
