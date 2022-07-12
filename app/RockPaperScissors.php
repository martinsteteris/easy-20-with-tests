<?php

namespace App;

class RockPaperScissors
{
    public function winner (array $games): string
    {
        $benson = 0;
        $abigail = 0;
        foreach ($games as $game) {
            if ($game == ['P', 'R'] || $game == ['S', 'P'] || $game == ['R', 'S']) {
                $benson ++;
            } else if ($game == ['P', 'S'] || $game == ['S', 'R'] || $game == ['R', 'P']) {
                $abigail ++;
            }
        }
        if ($benson > $abigail) {
            return "Abigail";
        } else if ($abigail > $benson) {
            return  "Benson";
        } else return "Tie!";
    }
}