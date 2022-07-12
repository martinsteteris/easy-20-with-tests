<?php

use App\Kindergarten;

test("should reverses all the words in a sentence that start with a particular letter", function() {
    $kindergarten = new Kindergarten();
expect($kindergarten->translateToAdult("First nam to walk on the noom", "n"))->toEqual("First man to walk on the moon");
expect($kindergarten->translateToAdult("reteP ate reppep", "r"))->toEqual("Peter ate pepper");
expect($kindergarten->translateToAdult("I dekcip delkcip onions for supper", "d"))->toEqual("I picked pickled onions for supper");
});

