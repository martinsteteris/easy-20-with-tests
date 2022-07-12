
<?php

use App\Family;
use App\VacationBudget;

test("should return the sum of people's budgets", function() {
    $vacationBudget = new VacationBudget();
expect($vacationBudget->calculateFamilyBudget([
    new Family("Mom", 45, 250),
    new Family("Dad", 50, 500),
    new Family("Sis", 22, 100),
    new Family("Bro", 15, 50),
    new Family("Me", 18, 654),
]))->toEqual(1554);
    expect($vacationBudget->calculateFamilyBudget([
        new Family("John", 21, 29000),
        new Family("Steve", 32, 32000),
        new Family("Martin", 16, 1600)
    ]))->toEqual(62600);
    expect($vacationBudget->calculateFamilyBudget([
        new Family("Chloe", 12, 0),
        new Family("Emily", 68, 1200),
        new Family("Bob", 70, 1200),
    ]))->toEqual(2400);
});
