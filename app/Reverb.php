<?php

namespace App;

class Reverb
{
    public function reverb(string $word, int $repeats): string
    {
        return str_repeat($word, $repeats);
    }
}
