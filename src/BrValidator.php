<?php

namespace Glowie\Plugins\BrValidator;

use Glowie\Core\Plugin;
use Glowie\Core\Tools\Validator;
use Glowie\Plugins\BrValidator\Rules\Cellphone;
use Glowie\Plugins\BrValidator\Rules\CellphoneWithCode;
use Glowie\Plugins\BrValidator\Rules\CellphoneWithDdd;
use Glowie\Plugins\BrValidator\Rules\Cnpj;
use Glowie\Plugins\BrValidator\Rules\Cpf;
use Glowie\Plugins\BrValidator\Rules\CpfOrCnpj;
use Glowie\Plugins\BrValidator\Rules\Phone;
use Glowie\Plugins\BrValidator\Rules\PhoneWithCode;
use Glowie\Plugins\BrValidator\Rules\PhoneWithDdd;
use Glowie\Plugins\BrValidator\Rules\Uf;

class BrValidator extends Plugin
{
    public function register()
    {
        Validator::setCustomRule('cellphone', Cellphone::class . '::validate');
        Validator::setCustomRule('cellphone_with_code', CellphoneWithCode::class . '::validate');
        Validator::setCustomRule('cellphone_with_ddd', CellphoneWithDdd::class . '::validate');
        Validator::setCustomRule('cnpj', Cnpj::class . '::validate');
        Validator::setCustomRule('cpf', Cpf::class . '::validate');
        Validator::setCustomRule('cpf_or_cnpj', CpfOrCnpj::class . '::validate');
        Validator::setCustomRule('phone', Phone::class . '::validate');
        Validator::setCustomRule('phone_with_code', PhoneWithCode::class . '::validate');
        Validator::setCustomRule('phone_with_ddd', PhoneWithDdd::class . '::validate');
        Validator::setCustomRule('uf', Uf::class . '::validate');
    }
}
