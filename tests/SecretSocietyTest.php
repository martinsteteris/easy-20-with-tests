
<?php

use App\SecretSociety;

test("should return a string of first letters from array items", function() {
    $secretSociety = new SecretSociety();
        expect($secretSociety->getFirstLetters(["Adam", "Sarah", "Malcolm"]))->toEqual("AMS");
        expect($secretSociety->getFirstLetters(["Harry", "Newt", "Luna", "Cho"]))->toEqual("CHLN");
        expect($secretSociety->getFirstLetters(["Phoebe", "Chandler", "Rachel", "Ross", "Monica", "Joey"]))->toEqual("CJMPRR");
    });