<?php
namespace App\Controllers;
use App\Core\Session;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;

class AdminController{
    public function index($view){
       switch($view){
        case 'admin':
        $user = new User();
        $users = $user->findAll();
       require __DIR__ . "/../Views/back/admin.php";
        break;
       case 'update':
        $id = $_GET['id'];
        $user = new User();
        $userr = $user->getUserbyid($id);
       require __DIR__ . "/../Views/back/admin.php";
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
    header("location:/admin"); 
    exit;
}

    public function delete(){
        $id = $_GET['id'];
         $user = new User();
         $user->deletuser($id);
    }
    public function update(){
         $user = new User();
         $user->setFirstname($_POST['firstname']);
         $user->setLastname($_POST['lastname']);
         $user->setPassword($_POST['password']);
         $user->setEmail($_POST['email']);
         $user->setRole($_POST['role']);
         $user->setId($_POST['id']);
         $user->updateuser();
        header("Location:\admin"); 
    }

}