<?php
require_once '../app/core/Controller.php';

class SinhvienController extends Controller
{
    public function index()
    {
        $sinhvienModel = $this->model('sinhvienModel');
        $sinhviens = $sinhvienModel->getAllSinhVien();

        $this->view('layouts/masterlayouts', [
            'title' => 'Danh sách sinh viên',
            'view' => 'sinhvien/index',
            'sinhviens' => $sinhviens,
        ]);
    }

    public function create()
    {
        $this->view('layouts/masterlayouts', [
            'title' => 'Thêm sinh viên',
            'view' => 'sinhvien/create',
        ]);
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: ?url=sinhvien/create');
            exit();
        }

        $sinhvienModel = $this->model('sinhvienModel');
        $sinhvienModel->insertSinhVien([
            'ma_sv' => trim($_POST['ma_sv'] ?? ''),
            'ho_ten' => trim($_POST['ho_ten'] ?? ''),
            'gioi_tinh' => $_POST['gioi_tinh'] ?? '',
            'ngay_sinh' => $_POST['ngay_sinh'] ?? null,
            'dia_chi' => trim($_POST['dia_chi'] ?? ''),
            'lop' => trim($_POST['lop'] ?? ''),
        ]);

        header('Location: ?url=sinhvien/index');
        exit();
    }
}
?>