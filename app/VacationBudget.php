<?php

namespace App;

class VacationBudget
{
    public static function calculateFamilyBudget (array $people): float
    {
        $familyBudget = 0;
        /** @var Family $person*/
        foreach ($people as $person) {
            $familyBudget += $person->getBudget();
        }
        return $familyBudget;
    }
}

class Family
{
    private string $name;
    private int $age;
    private float $budget;

    public function __construct(string $name, int $age, float $budget)
    {
        $this->name = $name;
        $this->age = $age;
        $this->budget = $budget;
    }

    public function getBudget(): float
    {
        return $this->budget;
    }
}
