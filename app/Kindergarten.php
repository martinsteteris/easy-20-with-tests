<?php

namespace App;

class Kindergarten
{

    public function translateToAdult (string $sentence, string $letter): string
    {
        $sentence = explode(' ', $sentence);
        for ($i = 0; $i < count($sentence); $i++) {
            if (substr($sentence[$i], 0, 1) == $letter) {
                $sentence[$i] = strrev($sentence[$i]);
            }
        }
        return implode(' ', $sentence);
    }
}



