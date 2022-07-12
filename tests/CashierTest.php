<?php

use App\Groceries;
use App\Cashier;

test("should return the total price of all groceries", function() {
    $cashier = new Cashier();
    expect($cashier->getTotalSum([
        new Groceries('Milk', 1, 1.50)
        ]))->toEqual(1.5);
    expect($cashier->getTotalSum([
        new Groceries('Milk', 1, 1.50),
        new Groceries('Cereals', 1, 2.50)
        ]))->toEqual(4);
    expect($cashier->getTotalSum([
        new Groceries('Milk', 1, 1.50),
        new Groceries('Eggs', 12, 0.10),
        new Groceries('Bread', 2, 1.60),
        new Groceries('Cheese', 1, 4.50)
        ]))->toEqual(10.4);
});
