<?php

use App\ObjectPro;

test("should return the keys and values of object as separate arrays", function() {
    $objectPro = new ObjectPro();
    $object1 = new stdClass();
    $object1->a = 1;
    $object1->b = 2;
    $object1->c = 3;
    expect($objectPro->separateKeysAndValues($object1))->toEqual([["a", "b", "c"], [1, 2, 3]]);

    $object2 = new stdClass();
    $object2->a = 'Apple';
    $object2->b = 'Microsoft';
    $object2->c = 'Google';
    expect($objectPro->separateKeysAndValues($object2))->toEqual([["a", "b", "c"], ["Apple", "Microsoft", "Google"]]);

    $object3 = new stdClass();
    $object3->key1 = true;
    $object3->key2 = false;
    $object3->key3 = null;
    expect($objectPro->separateKeysAndValues($object3))->toEqual([["key1", "key2", "key3"], [true, false, null]]);

});