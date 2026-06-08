<?php
require_once '../app/core/ConnectDB.php';

class sinhvienModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = ConnectDB::connect();
    }

    public function getAllSinhVien()
    {
        $query = 'SELECT * FROM sinhvien ORDER BY id DESC';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertSinhVien($data)
    {
        $query = 'INSERT INTO sinhvien (ma_sv, ho_ten, gioi_tinh, ngay_sinh, dia_chi, lop) VALUES (:ma_sv, :ho_ten, :gioi_tinh, :ngay_sinh, :dia_chi, :lop)';
        $stmt = $this->conn->prepare($query);

        return $stmt->execute([
            ':ma_sv' => $data['ma_sv'],
            ':ho_ten' => $data['ho_ten'],
            ':gioi_tinh' => $data['gioi_tinh'],
            ':ngay_sinh' => $data['ngay_sinh'],
            ':dia_chi' => $data['dia_chi'],
            ':lop' => $data['lop'],
        ]);
    }
}
?>