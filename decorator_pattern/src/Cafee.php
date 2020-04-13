<?php

namespace App;

class Cafee implements CafeeInterface
{
    public function getCost(): float
    {
        return 0.5;
    }
}