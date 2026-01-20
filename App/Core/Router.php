<?php
namespace App\Core;
use App\Controllers\AdminController;
use App\Controllers\AuthController;
use App\Controllers\FrontController;

class Router{

public function run()
  {
    
    $path = $_SERVER['PATH_INFO'] ?? '/logIn';

    switch ($path) {
        case "/home" :
                echo "this is home";
            break;

        case "/admin" :

            $controller = new AdminController();
                $admin = $controller->index('admin');
            
            break;
        case '/register':
            $controller = new AuthController();
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $controller->create();
            } 

            $controller->index('register');
        break;
        case '/login':
            $controller = new AuthController();
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $controller->login();
            } 
            $controller->index('login');
        break;
        case '/logout':
            $controller = new AuthController();
            if ($_SERVER['REQUEST_METHOD'] == "GET") {
                $controller->logout();
            } 
            $controller->index('login');
        break;
        case '/delete':
            $controller = new AdminController();
            if ($_SERVER['REQUEST_METHOD'] == "GET") {
                $controller->delete();
            } 
            $controller->index('admin');
        break;
        case '/update':
            $controller = new AdminController();
            if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $controller->index('update');

            }     
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $controller->update();
            }       

        break;
    case '/user':
            $controller = new FrontController();
            $controller->index();
            break;
        default : 
            $controller = new AuthController();
                $controller->index('login');
    }
  }
}