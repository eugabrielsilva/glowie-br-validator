<?php

namespace Glowie\Plugins\BrValidator\Rules;

/**
 * Regra de validação de CPF ou CNPJ.
 * @author Gabriel Silva
 * @package eugabrielsilva/glowie-br-validator
 * @license MIT
 */
class CpfOrCnpj implements Rule
{
    /**
     * Validar o dado.
     * @param mixed $value Dado a ser validado.
     * @return bool Retorna true para válido, false para inválido.
     */
    public static function validate($value)
    {
        if (!isset($value) || !is_string($value)) return false;
        return Cpf::validate($value) || Cnpj::validate($value);
    }
}
