<?php

namespace App;

class LargestSwap
{
    public function checkDigitSwap ($number): bool
    {
        return $number > (int)strrev($number);
    }
}
