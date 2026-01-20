<?php
namespace Models;

class Product {
    private int $id;
    private string $name;
    private float $price;
    private string $description;
    private int $stock;
    private string $image;
    private Category $category; 

    public function __construct(int $id, string $name, float $price, string $description, int $stock, string $image, Category $category) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->stock = $stock;
        $this->image = $image;
        $this->category = $category;
    }

}
