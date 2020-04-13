<?php

namespace App;

class FacadePay implements PayInterface
{
    private $pay;

    public function __construct(PayInterface $pay)
    {
        $this->pay = $pay;
    }

    public function pay(): string
    {
        return $this->pay->pay();
    }
}