<?php
class SinhvienController{
    public function index(){
        require_once '../app/views/sinhvien/index.php';
    }

    public function show($id){
        echo "show method from SinhvienController" . $id;
    }
    
}
?>