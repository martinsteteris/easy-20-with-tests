<?php

namespace App;

class DoubleTrouble
{
    public function clearList (array $people): array
    {
        return array_unique($people);
    }
}
