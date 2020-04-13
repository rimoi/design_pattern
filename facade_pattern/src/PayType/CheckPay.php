<?php


namespace App\PayType;


use App\PayInterface;

class CheckPay implements PayInterface
{
    public function pay(): string
    {
        return 'Je paie par chèque !';
    }
}