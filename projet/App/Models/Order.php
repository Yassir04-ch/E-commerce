<?php
namespace App\Models;

class Order {
    private int $id;
    private Client $client;
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
    public function setId(){
        $this->id = $id;
    }
    public function getClient(){
        return $this->client;
    }
    public function setClient(Client $client){
      $this->client = $client;
    }

    public function getOrderitems(){
        return $this->orderItems;
    }
    public function OrderItem(OrderItem $orderItems): void {
        $this->orderItems[] = $orderItems;
    }

    public function addOrder(){
      $sql = "INSERT INTO ordes (client_id,orderItems_id,status) VALUES (?,?,?,)";
      $stmt = $this->conection->prepare($sql);
      $stmt->execute([$this->client->getId()],$this->status);
    }

}
