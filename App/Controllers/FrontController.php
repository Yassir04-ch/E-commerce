<?php
namespace App\Controllers;

class FrontController{
    public function index(){
     require 'App\Views\front\home.php';
   }
}