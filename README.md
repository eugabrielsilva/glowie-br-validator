# Validação em PT-BR para Glowie Framework

Este plugin implementa regras de validação brasileiras comuns no Validator do [Glowie](https://glowie.gabrielsilva.dev.br).

## Instalação

1. Instale o plugin no seu projeto:

```bash
composer require eugabrielsilva/glowie-br-validator
```

2. Insira a classe dentro da array `plugins` no arquivo `app/config/Config.php`:

```php
'plugins' => [
    // ... outros plugins
    \Glowie\Plugins\BrValidator\BrValidator::class,
],
```

## Como usar

No Validator, passe o nome `custom:` seguido do nome da regra que você deseja usar para validação. Exemplo:

```php
use Glowie\Core\Tools\Validator;

$validator = new Validator();
$isValid = $validator->validate($data, 'custom:cpf');
```

## Regras disponíveis

| Regra                 | Descrição                                                                                                                                  |
| --------------------- | ------------------------------------------------------------------------------------------------------------------------------------------ |
| `cellphone`           | Valida se a string está num formato de celular: `99999-9999` ou `9999-9999`                                                                |
| `cellphone_with_ddd`  | Valida se a string está num formato de celular com DDD: `(99) 99999-9999` ou `(99) 9999-9999`, com ou sem espaços                          |
| `cellphone_with_code` | Valida se a string está num formato de celular com DDD e código do país: `+99 (99) 99999-9999` ou `+99 (99) 9999-9999`, com ou sem espaços |
| `cnpj`                | Valida se a string é um CNPJ válido, com ou sem máscara                                                                                    |
| `cpf`                 | Valida se a string é um CPF válido, com ou sem máscara                                                                                     |
| `cpf_or_cnpj`         | Valida se a string é um CPF ou CNPJ válido, com ou sem máscara                                                                             |
| `phone`               | Valida se a string está num formato de telefone: `9999-9999`                                                                               |
| `phone_with_ddd`      | Valida se a string está num formato de telefone com DDD: `(99) 9999-9999`, com ou sem espaços                                              |
| `phone_with_code`     | Valida se a string está num formato de telefone com DDD e código do país: `+99 (99) 9999-9999`, com ou sem espaços                         |
| `uf`                  | Valida se a string é um UF válido do Brasil, aceito apenas em maiúsculo                                                                    |
