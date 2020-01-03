# Exemplos de Uso do Marketplace

## Criar sub-conta no marketplace

``` php
  $mktplace = Marketplace::create(Array(
    "action"                    => "create_account", // criei esse atributo action pra ser enviado na api para determinar qual ação. Achei mais fácil do que criar novas funções
    "name"                      => 'nome',
    "reply_to"                  => 'email@email.com',
  ));
```

## Verificação de subconta no marketplace

``` php
  $validate = Account::create(Array(
      "id"                        => 'CLIENT_ID ',
      "action"                    => "request_verification",
      "automatic_validation"      => false,
      "files"                     => false,
      "data" => array(
          "price_range"           => "Mais que R$ 500,00",
          "physical_products"     => false,
          "business_type"         => "TIPO DO CLIENTE",
          "person_type"           => "Pessoa Física",
          "automatic_transfer"    => false,
          "cpf"                   => '999.999.999-99',
          "name"                  => "nome",
          "address"               => "endereço",
          "cep"                   => "cep",
          "city"                  => "cidade",
          "state"                 => "estado",
          "telephone"             => "27 33333333",
          "bank"                  => 'Banco do Brasil',       //'Banco do Brasil', 'Itaú', 'Bradesco', 'Caixa Econômica', 'Banco do Brasil', 'Santander'
          "bank_ag"               => '9999-9',
          "account_type"          => 'Corrente',       // Poupançaa, Corrente
          "bank_cc"               => '999999-9',
      )
  ));
```

## Retornando os dados do mktplace no marketplace

``` php
    Iugu::setApiKey('TOKEN_IUGU');   // user token como parametro
    $account = Account::fetch("CLIENT_ID"); // id da conta como parametro
```

## Transferendo valor para subconta no marketplace

``` php
    $transfer = Transfer::create(Array(
        "receiver_id"               => "CLIENT_ID", // id da conta recebedora
        "amount_cents"              => '1000' // valor em centavos = R$ 10,00
    ));
```

## Retirando valor da subconta no marketplace

``` php
    Iugu::setApiKey('TOKEN_IUGU');   // Chave do user
    $transfer = Transfer::create(Array(
        "receiver_id"               => "CLIENT_ID", // chave da conta mestre ou da conta recebedora
        "amount_cents"              => $numValorCentavos
    ));
```

## Pedido de retirada de dinheiro no marketplace

``` php
    Iugu::setApiKey('TOKEN_IUGU');   // Chave do user
    $withdraw = Account::create(Array(
        "action"                    => 'request_withdraw',
        "account_id"                => 'CLIENT_ID', // id da conta
        "amount"                    => '10.00' // reais com ponto separador decimal R$ 10,00
    ));
```

