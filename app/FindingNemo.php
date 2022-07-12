<?php

namespace App;

class FindingNemo
{
    public function findNemo (string $sentence): string
    {
        $arr = explode(' ', $sentence);
        if (in_array('Nemo', $arr)) {
            for ($i = 0; $i < count($arr); $i++) {
                if ($arr[$i] == "Nemo") {
                    return "I found Nemo at $i!";
                }
            }
        }
        return "I can't find Nemo :(";
    }
}

