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
      var_dump($products);
       require __DIR__ . "/../Views/front/Categorie.php";
   }
}