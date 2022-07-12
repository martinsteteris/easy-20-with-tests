<?php

namespace App;

class FortuneTeller
{
    public function readPrediction (string $color, string $location, string $name, string $item): string
    {
        return "You will meet $name in $location, and find $item in a $color room together.";
    }
}



