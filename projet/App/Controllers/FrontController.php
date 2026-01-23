<?php
namespace App\Controllers;
use App\Core\Session;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
class FrontController{
    public function index(){
     $product = new Product();
     $products = $product->getAllProduct();
    session_start();
    require __DIR__ . "/../Views/front/Categorie.php";
   }
    public function cart(){
    session_start();
    require __DIR__ . "/../Views/front/card.php";
   }

   public function addToCart()
{
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $productId = $_POST['product_id'];

    if (isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId]['quantity']++;
    } else {
        $_SESSION['cart'][$productId] = [
            'product_id' => $productId,
            'quantity' => 1
        ];
    }

    header("Location: /category");
    exit;
}

}