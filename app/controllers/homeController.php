<?php
class HomeController{
    public function index(){
        require_once '../app/views/home/index.php';
    }

    public function about(){
        echo "about method from HomeController";
    }
}