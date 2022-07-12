<?php

namespace App;

class BoxVolume
{
    public function calculateVolume (array $boxes): int
    {
        $volume = 0;
        foreach ($boxes as $box){
            $volume += array_product($box);
        }
        return $volume;
    }
}
