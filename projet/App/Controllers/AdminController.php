<?php
namespace App\Controllers;
use App\Core\Session;
use App\Models\Category;
use App\Models\Product;

class AdminController{
    public function index($view){
       switch($view){
        case 'admin':
        require __DIR__ . "/../Views/back/admin.php";
        break;
        case 'updatepro':
        $id = $_GET['id'];
        $productmod = new Product();
        $product = $productmod->geproductbyid($id);
        require __DIR__ . "/../Views/back/updatepro.php";
        break;
        case 'addproduct':
        require __DIR__ . "/../Views/back/addproduct.php";
        break;
       }
    }

   public function addproduct(){
    $namecategory = $_POST['category'];
    $categorie = new Category();

    $categoriee = $categorie->getCategoryByName($namecategory);

    if(!$categoriee){
        $categorie->setName($namecategory);
        $categorie->addCategory();
        $categoriee = $categorie;
    }

    $Product = new Product();
    $Product->setName($_POST['name']);
    $Product->setDescription($_POST['description']);  
    $Product->setPrice($_POST['price']);              
    $Product->setStock($_POST['stock']);
    $Product->setImage($_POST['image']);
    $Product->setCategory($categoriee);             
    $Product->addProduct();
    header("Location:/category"); 
     exit;
    }

    public function updatePdoduct(){
    $Product = new Product();
    $Product->setName($_POST['name']);
    $Product->setDescription($_POST['description']);  
    $Product->setPrice($_POST['price']);              
    $Product->setStock($_POST['stock']);
    $Product->setImage($_POST['image']);          
    $Product->setId($_POST['id']);          
    $Product->updatePdoduct();
        header("Location:/category"); 
    }

    public function deletproduct(){
        $id = $_GET['id'];
       $Product = new Product();
       $Product->deletepro( $id);
        header("Location:/category"); 
    }



}