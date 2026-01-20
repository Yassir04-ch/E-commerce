<?php
namespace Models;

class OrderItem {
    private Product $product;
    private int $quantity;
    private float $price;

    public function __construct(Product $product, int $quantity) {
        $this->product = $product;
        $this->quantity = $quantity;
    }

}
