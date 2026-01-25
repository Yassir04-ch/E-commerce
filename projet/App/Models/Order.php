<?php
namespace App\Models;
use App\Models\OrderItem;
use  App\Core\Database;
use PDO;

class Order {
    private int $id;
    private Client $client;
    private $created_at;
    private array $orderItems = [];
    private string $status;
    
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
     public function getcreated_at(){
        return $this->created_at;
    }
    public function setcreated_at($created_at){
        $this->created_at = $created_at;
    }
    public function getClient(){
        return $this->client;
    }
    public function setClient(Client $client){
      $this->client = $client;
    }
    
    public function getStatus(){
        return $this->status;
    }
     public function setStatus($status){
         $this->status = $status;
    }

    public function getOrderitems(){
        return $this->orderItems;
    }
    public function OrderItem(OrderItem $orderItems): void {
        $this->orderItems[] = $orderItems;
    }

    public function addOrder(){
      $sql = "INSERT INTO orders (client_id,status) VALUES (?,?)";
      $stmt = $this->conection->prepare($sql);
      $stmt->execute([$this->client->getId(),$this->status]);

      $this->id = $this->conection->lastInsertId();

      return $this->id;
    }
    
    public function getAllorder(){
        $sql = "SELECT status,created_at,id FROM orders";
        $stmt = $this->conection->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS,Order::class);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getorderitme(){
        $sql = "SELECT id,price,quantity FROM order_item WHERE order_id = ?";
        $stmt = $this->conection->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS,OrderItem::class);
        $stmt->execute([$this->id]);
        $this->orderItems = $stmt->fetchAll();
        return $this->orderItems;
    }
}
