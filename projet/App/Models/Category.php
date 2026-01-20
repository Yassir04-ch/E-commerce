<?php
namespace App\Models;

class Category {
    private int $id;
    private string $name;
    private array $products = []; 

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getProducts(){
        return $this->products;
    }
    public function setProducts(Product $products){
        $this->products[] = $products;
    }
}
