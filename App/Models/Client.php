<?php
namespace Models;

class Client extends User {
    private array $orders = []; 

    public function addOrder(Order $order): void {
        $this->orders[] = $order;
    }

}
