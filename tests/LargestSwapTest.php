<?php

use App\LargestSwap;

test("should return true if it's the largest of two possible digit swaps, false if not", function() {
    $largestSwap = new LargestSwap();
    expect($largestSwap->checkDigitSwap(27))->toEqual(false);
    expect($largestSwap->checkDigitSwap(43))->toEqual(true);
    expect($largestSwap->checkDigitSwap(14))->toEqual(false);
});
