<?php

namespace App;

class WarOfNumbers
{
    public static function determineWinner (array $numbers): string
    {
        $even = 0;
        $odd = 0;
        foreach ($numbers as $number) {
            $number % 2 == 0 ? $even += $number : $odd += $number;
        }
        if ($even > $odd) {
            return "Even numbers win by " . ($even - $odd);
        } else if ($odd > $even) {
            return "Odd numbers win by " . ($odd - $even);
        } else {
            return "There are no winners";
        }
    }
}
