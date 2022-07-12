<?php

use App\MaxMin;

test("should return both the minimum and maximum numbers, in that order in a new array", function() {
    $maxMin = new MaxMin();
    expect($maxMin->findMinMax([1, 2, 3, 4, 5]))->toEqual([1, 5]);
    expect($maxMin->findMinMax([2334454, 5]))->toEqual([5, 2334454]);
    expect($maxMin->findMinMax([1]))->toEqual([1, 1]);
});
