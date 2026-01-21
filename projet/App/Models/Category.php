<?php
namespace App\Models;
use PDO;
use  App\Core\Database;

class Category {
    private int $id;
    private string $name;
    private array $products = []; 

    private PDO $connexion;

    public function __construct(){
       $this->connexion = Database::getConn();
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
    public function getProducts(){
        return $this->products;
    }
    public function setProducts(Product $products){
        $this->products[] = $products;
    }
    public function addCategory(){
        $sql = "INSERT INTO category(name) VALUES (?)";
        $stmt = $this->connexion->prepare($sql);
        $stmt->execute([$this->name]);
    }

    public function updateCategory(){

    }

    public function getCategoryByName($name){
        $sql = "SELECT * FROM category WHERE name = ?";
        $stmt = $this->connexion->prepare($sql);
        $stmt->execute([$name]);
        $stmt->setFetchMode(PDO::FETCH_CLASS,Category::class);
          return $stmt->fetch();
    }
}



