<?php
namespace App\Models;
use App\Models\User;
class Client extends User {
    protected string $role = 'client';
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
