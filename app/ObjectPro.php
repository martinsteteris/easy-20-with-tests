<?php

namespace App;

class ObjectPro
{
    public function separateKeysAndValues (Object $randomObject): array
    {
        $objectToArray = get_object_vars($randomObject);
        $keys = array_keys($objectToArray);
        return [$keys, array_values($objectToArray)];

    }
}
