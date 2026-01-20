<?php
namespace Models;

class Category {
    private int $id;
    private string $name;
    private array $products = []; 

    public function __construct(int $id, string $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public function addProduct(Product $product): void {
        $this->products[] = $product;
    }

}
