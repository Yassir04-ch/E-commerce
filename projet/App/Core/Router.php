<?php
namespace App\Core;
use App\Controllers\AdminController;
use App\Controllers\AuthController;
use App\Controllers\FrontController;

class Router
{
    public function run()
    {
        $uri = $_SERVER['REQUEST_URI'] ?? '/accueil';

        $path = parse_url($uri, PHP_URL_PATH);

        $path = rtrim($path, '/') ?: '/';

        switch ($path) {

            case '/':
            case '/accueil':
                require __DIR__ . "/../Views/auth/Accuel.php";
                break;
                 case '/dach':
                require __DIR__ . "/../Views/back/Dashboard.php";
                break;
                case '/category':
                $controller = new FrontController();
                $controller->index();
                
                break;
                 case '/product':
                require __DIR__ . "/../Views/front/Product.php";
                break;
            case '/admin':
                $controller = new AdminController();
                $controller->index('admin');
                break;
            case '/deleteProduct':
                $controller = new AdminController();
                  $controller->deletproduct();
                break;
            case '/updatepro':
                   $controller = new AdminController();
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                
                   $controller->updatePdoduct();
                 }
                 else{
                   $controller->index('updatepro');
                 }
                break;
               case '/add':
                $controller = new AdminController();

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $controller->addproduct(); 
                } else {
                    $controller->index('addproduct');
                }
                break;

            case '/register':
                $controller = new AuthController();
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $controller->create();
                }
                $controller->index('register');
                break;

            case '/login':
                $controller = new AuthController();
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $controller->login();
                }
                $controller->index('login');
                break;

            case '/logout':
                $controller = new AuthController();
                $controller->logout();
                break;

            case '/delete':
                $controller = new AdminController();
                $controller->delete();
                break;

            case '/update':
                $controller = new AdminController();
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $controller->update();
                } else {
                    $controller->index('update');
                }
                break;

            case '/client':
                $controller = new FrontController();
                $controller->index();
                break;

            default:
                http_response_code(404);
                echo "404 - Page not found";
        }
    }
}
