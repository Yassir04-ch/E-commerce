<?php
namespace App\Models;
use PDO;
use  App\Core\Database;

class Product {
    private int $id;
    private string $name;
    private float $price;
    private string $description;
    private int $stock;
    private string $image;
    private Category $category; 

     private PDO $conection;


    public function __construct()
    {
        
        $this->conection = Database::getConn();
     }


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
     public function addProduct()
    {
        $sql = "INSERT INTO products (name, description, price, stock, image, category_id)
                VALUES (?, ?, ?, ?, ?, ?)";
                
        $stmt = $this->conection->prepare($sql);
         $stmt->execute([$this->name,$this->description,$this->price,
         $this->stock,$this->image,$this->category->getId()]);
    }

    public function getAllProduct(){
    $sql = "SELECT name,description,id,image,stock,price FROM products";
     $stmt = $this->conection->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_CLASS,Product::class);
    return $stmt->fetchAll();
}

    public function updatePdoduct()
    {
        $sql = "UPDATE products SET name = ?, description = ?, price = ?, stock = ?, image = ? WHERE id=?";
         $stmt = $this->conection->prepare($sql);
         $stmt->execute([$this->name,$this->description,$this->price,$this->stock,$this->image , $this->getId()]);
    }

    public function deletepro(int $id)
    {
        $sql = "DELETE FROM products WHERE id=?";
        $stmt = $this->conection->prepare($sql);
        return $stmt->execute([$id]);
    }

    public function geproductbyid($id){
    $sql = "SELECT name,description,id,image,stock,price FROM products WHERE id = ?";
    $stmt = $this->conection->prepare($sql);
    $stmt->execute([$id]);
    $stmt->setFetchMode(PDO::FETCH_CLASS,Product::class);
    return $stmt->fetch();
    }


}