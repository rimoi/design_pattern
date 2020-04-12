<?php

namespace App;

class Cappuccino implements CafeeInterface
{
    public function getCost(): float
    {
        return 1.25;
    }
}