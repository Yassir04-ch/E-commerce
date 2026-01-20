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
  
   public function getPrice(){
    return $this->price;
   }

   public function setPrice($price){
    $this->price = $price;
   }
   

     
    public function getDescription()
    {
        return $this->description;
    }
 
    public function setDescription($description)
    {
        $this->description = $description;

     }
 
    public function getStock()
    {
        return $this->stock;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;

    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getCategory(){
        return $this->category;
    }
    public function setCategory(Category $category){
        $this->category = $category;
    }
}
