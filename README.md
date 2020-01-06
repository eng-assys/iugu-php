# Iugu para PHP

[![Build status](https://img.shields.io/travis/iugu/iugu-php.svg)](https://travis-ci.org/iugu/iugu-php)

## Aviso
Devido às modificações na estrutura do código, os testes não estão funcionando e os exemplos disponíveis na pasta 'examples' estão desatualizados (essa situação será consertada em uma release futura).

## Requisitos

* PHP 5.4+

## Instalação

Faça o download da biblioteca:

```
git clone https://github.com/eng-assys/iugu-php
```

### Usando Composer

```
$ composer require eng_assys/iugu:dev-master
```

O autoload do composer irá cuidar do resto.

## Exemplos de Uso

### 1. Buscar um Cliente

```php
require 'vendor/autoload.php';

\Iugu\Iugu::setApiKey('c73d49f9-6490-46ee-ba36-dcf69f6334fd'); // Ache sua chave API no Painel

\Iugu\Customer::fetch('8DCD9BE5DC8D4FFD9CE8FA6C0FCAC631');
```

### 2. Criar uma cobrança

```php

use Iugu\Iugu;

use Iugu\Charge;

Iugu::setApiKey("c73d49f9-6490-46ee-ba36-dcf69f6334fd"); // Ache sua chave API no Painel

Charge::create([
    "token"=> "TOKEN QUE VEIO DO IUGU.JS OU CRIADO VIA BIBLIOTECA",
    "email"=>"your@email.test",
    "items" => [
      [
        "description"=>"Item Teste",
        "quantity"=>"1",
        "price_cents"=>"1000"
      ]
    ]
]);
```

## Documentação

Acesse [iugu.com/documentacao](http://iugu.com/documentacao) para referência

## Testes

* Testes desatualizados por enquanto.
