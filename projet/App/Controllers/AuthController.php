<?php

namespace App\Controllers;
use App\Models\User;
use App\Models\Client;

class AuthController{
      public function index($page) {
           require __DIR__ . "/../Views/auth/$page.php";
       }

    public function create(){
        $Client = new Client();
        $Client->setFirstname($_POST['firstname']);
        $Client->setLastname($_POST['lastname']);
        $Client->setEmail($_POST['email']);
        $Client->setPassword(password_hash($_POST['password'],PASSWORD_DEFAULT));
        $Client->create();
        header("Location:\login"); 
    }

  public function login()
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $usermod = new User();
    $user = $usermod->getUser($email);

    if ($user  &&  password_verify($password,$user->getPassword()) ) {
        session_start();
       $_SESSION['role'] = $user->getRole();
       $_SESSION['id'] = $user->getId();

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
    session_start();
    unset($_SESSION['role']);
    unset($_SESSION['id']);
    header("Location: /accueil");
}

}
