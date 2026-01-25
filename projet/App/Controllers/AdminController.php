<?php
namespace App\Controllers;
use App\Core\Session;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;

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
        case 'updateuser':
        $id = $_GET['id'];
        $userMod = new User();
        $user = $userMod->getUserbyid($id); 
        require __DIR__ . "/../Views/back/updateuser.php";
        break;
        case 'users':
        $user = new User();
        $users = $user->findAll();
        require __DIR__ . "/../Views/back/users.php";
        break;
        case 'order':

        require __DIR__ . "/../Views/back/order.php";
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
   public function updateuser(){
       $user = new User();
       $user->setId($_POST['id']);
       $user->setFirstname($_POST['firstname']);
       $user->setLastname( $_POST['lastname']);
       $user->setEmail( $_POST['email']);
       $user->setRole( $_POST['role']);
       $user->setPassword( $_POST['password']);
       $users = $user->updateuser();
       header("location:/users");

   }
   public function deleteuser(){
    $id = $_GET['id'];
    $user = new User();
    $user->deletuser($id);
    header("Location:/users"); 

   }


}