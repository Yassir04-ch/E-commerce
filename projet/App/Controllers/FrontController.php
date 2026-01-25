<?php
namespace App\Controllers;
use App\Core\Session;
use App\Models\Client;
use App\Models\Category;
use App\Models\Product;
use App\Models\order;
use App\Models\orderItem;
class FrontController{
    public function index(){
     $product = new Product();
     $products = $product->getAllProduct();
    session_start();
    require __DIR__ . "/../Views/front/Categorie.php";
   }

  public function addToCart()
    {
        session_start();
        
        $productId = $_POST['product_id'] ;
        $quantity  = $_POST['quantity'] ;

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

      if(isset($_SESSION['cart'][$productId])){
        $_SESSION['cart'][$productId] += $quantity ;
      }
      else{
        $_SESSION['cart'][$productId] = $quantity;
      }

        header("Location: /category");
    }
    
    public function cart()
    {
        session_start();

        $cart = $_SESSION['cart'] ?? [];
        $productsCart = [];
        $productmod = new Product();
        
        foreach ($cart as $productId => $qty) {
            $product = $productmod->findpro($productId);
            if($product){
                $subtotal = $product->getPrice() * $qty;
                $productsCart []= [
                    'product'=>$product,
                    'qty'=>$qty,
                    'subtotal'=>$subtotal
                ];
            }
        }
     

        require __DIR__ . "/../Views/front/card.php";
    }


    public function deleteCart()
    {
        session_start();

        $productId = $_POST['product_id'];

        if (isset($_SESSION['cart'][$productId])) {
            unset($_SESSION['cart'][$productId]);
        }

        header("Location: /card");
        exit;
    }
    public function sendorder(){
        session_start();
        if(!isset($_SESSION['id'])){
          header("Location:/login"); 
          exit;
        }
        if (!isset($_SESSION['cart'])) {
          header("location:/category");
          exit;
        }
        $productmod = new Product();
        $client = new Client();
        $order = new Order();
        $client->setId($_SESSION['id']);
        $order->setClient($client);
        $order->setStatus('En Attant');
        $order->addOrder();

        $cart = $_SESSION['cart'];
        
        $orderitem = new OrderItem();
        foreach ($cart as $productId => $qty) {
            $product = $productmod->findpro($productId);
            if($product){
               $orderitem->setOrder($order);
               $orderitem->setProduct($product);
               $orderitem->setQuantity($qty);
               $orderitem->setPrice($product);
               $orderitem->save();
            }
        }

        unset($_SESSION['cart']);
        header("Location:/category");
        
    }

}