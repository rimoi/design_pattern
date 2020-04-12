<?php

namespace App;

class MilkCafee implements CafeeInterface
{
    public function getCost(): float
    {
        return 2;
    }
}