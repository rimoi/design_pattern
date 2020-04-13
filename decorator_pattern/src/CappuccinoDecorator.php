<?php

namespace App;

final class CappuccinoDecorator implements CafeeInterface
{
    private $cafee;

    public function __construct(CafeeInterface $cafee)
    {
        $this->cafee = $cafee;
    }

    public function getCost(): float
    {
        return $this->cafee->getCost() + 2;
    }
}