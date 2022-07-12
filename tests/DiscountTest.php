
<?php

use App\Discount;

test("should return the final price after the discount", function() {
    $discount = new Discount();
expect($discount->finalPrice(1500, 50))->toEqual(750);
expect($discount->finalPrice(89, 20))->toEqual(71.2);
expect($discount->finalPrice(100, 75))->toEqual(25);
});