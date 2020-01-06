<?php

namespace IuguSdk;

class PaymentToken extends APIResource
{
  public static function create($attributes = [])
  {
    return self::createAPI($attributes);
  }
}
