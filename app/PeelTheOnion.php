<?php

namespace App;

class PeelTheOnion
{
    public function peel (array $onion): array
    {
        array_shift($onion);
        array_pop($onion);
        for ($i = 0; $i < count($onion); $i++) {
                array_shift($onion[$i]);
                array_pop($onion[$i]);
        }
        return $onion;
    }
}

