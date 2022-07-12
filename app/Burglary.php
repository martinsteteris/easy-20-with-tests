<?php

namespace App;

class Burglary
{
    public function countStolenItems (array $stolenItems): string
    {
        if (count($stolenItems) > 0) {
            $result = 0;
            /** @var StolenItems $item*/
            foreach ($stolenItems as $item) {
                $result += $item->getValue();
            }
            return $result;

        }
            return 'Lucky you!';
    }
}

class StolenItems
{
    private string $name;
    private int $value;

    public function __construct(string $name, int $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
