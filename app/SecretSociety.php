<?php

namespace App;

class SecretSociety
{
    public function getFirstLetters (array $names): string
    {
        $firsts = [];
        foreach ($names as $name) {
            $firsts[] = substr($name, 0, 1);
        }
        sort($firsts);
        return implode('', $firsts);
    }
}
