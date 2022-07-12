<?php

use App\PupperAge;

test("should return dog's age in dog years", function() {
    $pupperAgeCalculator = new \App\PupperAge();
    expect($pupperAgeCalculator->convertToHumanYears(1))->toEqual("Your doggie is 7 years old in dog years!");
    expect($pupperAgeCalculator->convertToHumanYears(10))->toEqual("Your doggie is 70 years old in dog years!");
    expect($pupperAgeCalculator->convertToHumanYears(15))->toEqual("Your doggie is 105 years old in dog years!");
});