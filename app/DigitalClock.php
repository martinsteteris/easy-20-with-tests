<?php

namespace App;

class DigitalClock
{
    public function formatTime ($seconds): string
    {
        return gmdate("H:i:s", $seconds);
    }
}
