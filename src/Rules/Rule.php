<?php

namespace Glowie\Plugins\BrValidator\Rules;

/**
 * Interface base de regras de validação.
 * @author Gabriel Silva
 * @package eugabrielsilva/glowie-br-validator
 * @license MIT
 */
interface Rule
{
    /**
     * Validar o dado.
     * @param mixed $value Dado a ser validado.
     * @return bool Retorna true para válido, false para inválido.
     */
    public static function validate($data);
}
