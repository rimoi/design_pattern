<?php

namespace App\PayType;

use App\PayInterface;

class CashPay implements PayInterface
{
    public function pay(): string
    {
        return 'Je paie en cash !';
    }
}