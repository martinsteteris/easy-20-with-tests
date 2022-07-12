<?php

use App\DoubleTrouble;

test("should remove duplicate values from array", function() {
    $doubleTrouble = new DoubleTrouble();
expect($doubleTrouble->clearList(["John", "Taylor", "John"]))->toEqual(["John", "Taylor"]);
expect($doubleTrouble->clearList(["Ann", "Ann", "Ann"]))->toEqual(["Ann"]);
expect($doubleTrouble->clearList(["John", "Taylor"]))->toEqual(["John", "Taylor"]);
});