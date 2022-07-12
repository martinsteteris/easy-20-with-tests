
<?php

use App\Burglary;
use App\StolenItems;

test("should return the total value of stolen items", function() {
    $burglary = new Burglary();
expect($burglary->countStolenItems( [
    new StolenItems('tv', 30),
    new StolenItems('skate', 20),
    new StolenItems('stereo', 50)
    ]))->toEqual(100);
    expect($burglary->countStolenItems( [
        new StolenItems('painting', 2000)
    ]))->toEqual(2000);
    expect($burglary->countStolenItems( [
        new StolenItems('ring', 250),
        new StolenItems('necklace', 500),
    ]))->toEqual(750);
});

test("should return a string 'Lucky you!', if nothing was stolen", function() {
    $burglary = new Burglary();
expect($burglary->countStolenItems([]))->toEqual("Lucky you!");
});