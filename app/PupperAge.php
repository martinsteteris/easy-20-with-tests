<?php

namespace App;

class PupperAge
{
    public function convertToHumanYears($age): string
    {
        return "Your doggie is " . ($age * 7)  .  " years old in dog years!";
    }
}
