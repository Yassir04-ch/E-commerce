<?php
namespace App\Models;

class Order {
    private int $id;
    private Client $client;
    private array $orderItems = [];
    private string $status;

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

}
