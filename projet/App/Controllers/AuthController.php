<?php

namespace App\Controllers;
use App\Core\Session;
use App\Models\User;

class AuthController{
      public function index($page) {
           require __DIR__ . "/../Views/auth/$page.php";
       }

    public function create(){
        $Client = new Client();
        $Client->setFirstname($_POST['firstname']);
        $Client->setLastname($_POST['lastname']);
        $Client->setEmail($_POST['email']);
        $Client->setPassword($_POST['password']);
        $Client->setRole($_POST['role']);
        $Client->create();
        header("Location:\login"); 
    }

  public function login()
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    $usermod = new User();
    $user = $usermod->getUser($email);

    if ($user && $user->getPassword() && $password == $user->getPassword()) {
        session_start();
       $_SESSION['role'] = $user->getRole();

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
