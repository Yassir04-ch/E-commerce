<?php

namespace App\Controllers;
use App\Core\Session;
use App\Models\User;

class AuthController{
      public function index($page) {
           require __DIR__ . "/../Views/auth/$page.php";
       }

    public function create(){
        $user = new User();
        $user->setFirstname($_POST['firstname']);
        $user->setLastname($_POST['lastname']);
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        $user->setRole($_POST['role']);
        $user->create();
        header("Location:\login"); 
    }

  public function login()
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $usermod = new User();
    $user = $usermod->getUser($email);

    if ($user && $user->getPassword() && $password == $user->getPassword()) {


        if ($user->getRole() === 'admin') {
            header("Location: /admin");
        } else {
            header("Location: /client");
        }
        exit;
    }
    header("Location: /login");
    exit;
}


public function logout(){
    Session::start();
    Session::destroy();
    header("Location: /login");
}


    
}
