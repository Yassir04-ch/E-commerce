<?php
namespace App\Models;
use  App\Core\Database;
use  App\Models\Order;
use  App\Models\Product;

use PDO;

class OrderItem {
    private int $id;
    private Product $product;
    private int $quantity;
    private float $price;
    private Order $order;
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
        return $this->price;
    }
    public function setPrice(Product $product){
       $this->price = $product->getPrice();
    }
    public function getOrder(){
     return  $this->order;
    }

    public function setOrder(Order $order){
       $this->order = $order;
    }
    
    public function save() {
        $sql = "INSERT INTO order_item (order_id, product_id, quantity, price)
                VALUES (?, ?, ?, ?)";
        $stmt = $this->conection->prepare($sql);
        $stmt->execute([$this->order->getId(),$this->product->getId(),$this->quantity,$this->price
        ]);
    }

}
