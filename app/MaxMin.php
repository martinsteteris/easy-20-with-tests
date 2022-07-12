<?php

namespace App;

class MaxMin
{
    public function findMinMax ($numbers): array
    {
        return [min($numbers), max($numbers)];
    }
}
