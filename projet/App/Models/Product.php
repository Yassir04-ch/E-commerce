<?php
namespace Models;
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
    
    public function addProduct(){
        $sql = "INSERT INTO products (name,description,price,image,strock,category_id) VALUES(?,?,?,?,?)";
        $stmt = $this->conection->prepare($sql);
        $stmt->execute([$this->name,$this->description,$this->price,
        $this->image,$this->strock,$this->getCategory()->getId()]);
    }
    public function getProducts(){
        $sql = "SELECT * FROM products join category ON category.id = products.category_id";
        $stmt = $this->conection->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, Product::class);
        $stmt->fetch();
    }

    public function updateProduct(){
        $sql = "UPDATE products SET name = $this->name , description = $this->description,
         price = $this->price ,strock = $this->stock WHERE id = $this->id ";
         $stmt->this->conection->prepare();
         $stmt->execute();
    }

    public function deleteProduct($id){
        $sql = "DELETE FROM products WHERE id = ?";
        $stmt = $this->conection->prepare();
        $stmt->execute([$id]);
    }

}
