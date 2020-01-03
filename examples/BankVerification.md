# Classe BankVerification

## Exemplo de uso da classe BankVerification

``` php
  Iugu::setApiKey($user_token);   // Chave do user
  $updateBank = Iugu_BankVerification::create(Array(
    "agency"                    => '9999-9',
    "account"                   => '999999-9',
    "account_type"              => 'cp',   		// cp, cc
    "bank"                      => '001',       // "001" para Banco do Brasil, "033" para Santander, "104" para Caixa Econômica, "237" para Bradesco, "341" para Itaú e "399" para HSBC
    "automatic_validation"      => false,
  ));
```