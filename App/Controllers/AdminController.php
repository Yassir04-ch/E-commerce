<?php
namespace App\Controllers;
use App\Core\Session;
use App\Models\User;

class AdminController{
    public function index($view){
       switch($view){
        case 'admin':
        $user = new User();
        $users = $user->findAll();
        Session::start();
        require "App\Views\back\admin.php";
        break;
       case 'update':
        $id = $_GET['id'];
        $user = new User();
        $userr = $user->getUserbyid($id);
        require "App\Views\back\update.php";
        break;
       }
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