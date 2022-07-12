<?php

namespace App;

class MatchMaker
{
    public function matches (array $women, array $men): array
    {
        $matches = [];
        if (count($men) == count($women)) {
            for ($i = 0; $i < count($men); $i++) {
                $matches[] = [$women[$i], $men[$i]];
            } return $matches;
        } else return ["Cupid is on vacation"];
    }
}
