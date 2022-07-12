<?php

use App\DigitalClock;

test("should convert seconds to a time string in format hh:mm:ss", function() {
    $digitalClock = new DigitalClock();
expect($digitalClock->formatTime(5025))->toEqual("01:23:45");
expect($digitalClock->formatTime(61201))->toEqual("17:00:01");
expect($digitalClock->formatTime(87000))->toEqual("00:10:00");
});
