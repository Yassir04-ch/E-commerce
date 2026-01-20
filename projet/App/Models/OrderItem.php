<?php
namespace Models;

class OrderItem {
    private int $id;
    private Product $product;
    private int $quantity;
    private float $price;

    public function __construct(Product $product, int $quantity) {
        $this->product = $product;
        $this->quantity = $quantity;
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getProduct(){
        return $this->product;
    }
    public function setProduct(Product $product){
        $this->product = $product;
    }
    public function getQuantity(){
        return $this->quantity;
    }
    public function setQuantity($quantity){
        $this->quantity = $quantity;
    }
    public function getPrice(){
        return $this->price;;
    }
    public function setPrice($price){
       $this->price = $price;
    }
}
