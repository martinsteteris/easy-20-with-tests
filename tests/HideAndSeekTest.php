
<?php

use App\HideAndSeek;

test("should return all lowercase letters", function() {
$hideAndSeek = new HideAndSeek();
        expect($hideAndSeek->findLowerCase("UcUNFYGaFYFYGtNUH"))->toEqual("cat");
        expect($hideAndSeek->findLowerCase("bEEFGBuFBRrHgUHlNFYaYr"))->toEqual("burglar");
        expect($hideAndSeek->findLowerCase("YFpHUFBrFBYFBYLGBYoEFGBMENT"))->toEqual("pro");
    });