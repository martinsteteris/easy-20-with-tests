<?php

namespace App;

class Discount
{
    public  function finalPrice (float $price, float $discount): float
    {
        return $price - ($price * $discount/100);
    }
}
