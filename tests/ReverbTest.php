<?php

use App\Reverb;

test("should return the given text repeated n times", function() {
    $reverb = new Reverb();
    expect($reverb->reverb("ab", 3))->toEqual("ababab");
    expect($reverb->reverb("kiwi", 1))->toEqual("kiwi");
    expect($reverb->reverb("cherry", 2))->toEqual("cherrycherry");
});
