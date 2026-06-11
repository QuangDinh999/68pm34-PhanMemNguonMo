<?php
require_once '../app/core/Controller.php';

class SinhvienController extends Controller
{
    public function index($page = 1)
    {
        $limit = 5;
        $sinhvienModel = $this->model('sinhvienModel');
        $totalRows = $sinhvienModel->getTotalSinhVien();
        $totalPages = ceil($totalRows / $limit);
        
        if ($page < 1) $page = 1;
        if ($page > $totalPages && $totalPages > 0) $page = $totalPages;

        $sinhviens = $sinhvienModel->getAllSinhVien($page, $limit);

        $this->view('layouts/masterlayouts', [
            'title' => 'Danh sách sinh viên',
            'view' => 'sinhvien/index',
            'sinhviens' => $sinhviens,
            'currentPage' => $page,
            'totalPages' => $totalPages,
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

    public function edit($id)
    {
        $sinhvienModel = $this->model('sinhvienModel');
        $sinhvien = $sinhvienModel->getSinhVienById($id);

        if (!$sinhvien) {
            header('Location: ?url=sinhvien/index');
            exit();
        }

        $this->view('layouts/masterlayouts', [
            'title' => 'Sửa sinh viên',
            'view' => 'sinhvien/edit',
            'sinhvien' => $sinhvien,
        ]);
    }

    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: ?url=sinhvien/edit/' . $id);
            exit();
        }

        $sinhvienModel = $this->model('sinhvienModel');
        $sinhvienModel->updateSinhVien($id, [
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

    public function delete($id)
    {
        $sinhvienModel = $this->model('sinhvienModel');
        $sinhvienModel->deleteSinhVien($id);

        header('Location: ?url=sinhvien/index');
        exit();
    }
}
?>