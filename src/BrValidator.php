<?php

namespace Glowie\Plugins\BrValidator;

use Glowie\Core\Plugin;
use Glowie\Core\Tools\Validator;
use Glowie\Plugins\BrValidator\Rules\Cellphone;
use Glowie\Plugins\BrValidator\Rules\CellphoneWithCode;
use Glowie\Plugins\BrValidator\Rules\CellphoneWithDdd;
use Glowie\Plugins\BrValidator\Rules\Cep;
use Glowie\Plugins\BrValidator\Rules\CepWithMask;
use Glowie\Plugins\BrValidator\Rules\Cnpj;
use Glowie\Plugins\BrValidator\Rules\CnpjWithMask;
use Glowie\Plugins\BrValidator\Rules\Cpf;
use Glowie\Plugins\BrValidator\Rules\CpfOrCnpj;
use Glowie\Plugins\BrValidator\Rules\CpfOrCnpjWithMask;
use Glowie\Plugins\BrValidator\Rules\CpfWithMask;
use Glowie\Plugins\BrValidator\Rules\Phone;
use Glowie\Plugins\BrValidator\Rules\PhoneWithCode;
use Glowie\Plugins\BrValidator\Rules\PhoneWithDdd;
use Glowie\Plugins\BrValidator\Rules\Uf;

/**
 * Plugin de validação em PT-BR para Glowie.
 * @author Gabriel Silva
 * @package eugabrielsilva/glowie-br-validator
 * @license MIT
 */
class BrValidator extends Plugin
{
    /**
     * Registra as regras customizadas.
     */
    public function register()
    {
        Validator::setCustomRule('cellphone', [Cellphone::class, 'validate']);
        Validator::setCustomRule('cellphone_with_code', [CellphoneWithCode::class, 'validate']);
        Validator::setCustomRule('cellphone_with_ddd', [CellphoneWithDdd::class, 'validate']);
        Validator::setCustomRule('cep', [Cep::class, 'validate']);
        Validator::setCustomRule('cep_with_mask', [CepWithMask::class, 'validate']);
        Validator::setCustomRule('cnpj', [Cnpj::class, 'validate']);
        Validator::setCustomRule('cnpj_with_mask', [CnpjWithMask::class, 'validate']);
        Validator::setCustomRule('cpf', [Cpf::class, 'validate']);
        Validator::setCustomRule('cpf_with_mask', [CpfWithMask::class, 'validate']);
        Validator::setCustomRule('cpf_or_cnpj', [CpfOrCnpj::class, 'validate']);
        Validator::setCustomRule('cpf_or_cnpj_with_mask', [CpfOrCnpjWithMask::class, 'validate']);
        Validator::setCustomRule('phone', [Phone::class, 'validate']);
        Validator::setCustomRule('phone_with_code', [PhoneWithCode::class, 'validate']);
        Validator::setCustomRule('phone_with_ddd', [PhoneWithDdd::class, 'validate']);
        Validator::setCustomRule('uf', [Uf::class, 'validate']);
    }
}
