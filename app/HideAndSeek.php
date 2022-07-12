<?php

namespace App;

class HideAndSeek
{
    public function findLowerCase(string $sentence): string
    {
        $result = [];
        $arr = str_split($sentence, 1);
        foreach ($arr as $char) {
            if (ord($char) > 96 && (ord($char) < 123)) {
                $result[] = $char;
                }
        }
        return implode('', $result);
    }
}
