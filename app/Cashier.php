<?php

namespace App;

class Cashier
{

    public function getTotalSum ($groceries): float
    {
        $total = 0;

        /** @var Groceries $item*/
        foreach ($groceries as $item) {
            $total += $item->getPrice() * $item->getQuantity();
        }
        return $total;
    }
}

class Groceries
{
    private string $product;
    private int $quantity;
    private float $price;


    public function __construct(string $product, int $quantity, float $price)
    {
        $this->product = $product;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

}



