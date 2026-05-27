<?php
require_once '../app/core/controller.php';
class SinhvienController extends Controller {
    public function index()
    {
        $sinhvienModel = $this->model('sinhvienModel');

        $sinhviens = $sinhvienModel->getAllSinhVien();

        $this->view('sinhvien/index', [
            'sinhviens' => $sinhviens
        ]);
    }

    public function create()
    {
        require_once '../app/views/sinhvien/create.php';
    }
}
?>