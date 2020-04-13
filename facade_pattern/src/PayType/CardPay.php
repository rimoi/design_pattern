<?php

namespace App\PayType;

use App\PayInterface;

class CardPay implements PayInterface
{
    public function pay(): string
    {
        return 'Je paie par carte bleue !';
    }
}