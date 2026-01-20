<?php
namespace App\Models;

class Client extends User {
    private int $id;
    private array $orders = []; 
    
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getOrder(){
        return $this->orders;
    }

    public function setOrder(array $order): void {
        $this->orders[] = $order;
    }

}
