<?php

namespace App;

class Expresso implements CafeeInterface
{
    public function getCost(): float
    {
        return 2.5;
    }
}