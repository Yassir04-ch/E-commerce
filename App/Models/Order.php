<?php
namespace Models;

class Order {
    private int $id;
    private Client $client;
    private array $orderItems = [];
    private string $status;

    public function __construct(int $id, Client $client, string $status = 'pending') {
        $this->id = $id;
        $this->client = $client;
        $this->status = $status;
    }

    public function addOrderItem(OrderItem $item): void {
        $this->orderItems[] = $item;
    }

}
