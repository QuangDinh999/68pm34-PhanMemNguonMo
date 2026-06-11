<?php
require_once '../app/core/ConnectDB.php';

class sinhvienModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = ConnectDB::connect();
    }

    public function getAllSinhVien($page = 1, $limit = 5)
    {
        $offset = ($page - 1) * $limit;
        $query = "SELECT * FROM sinhvien ORDER BY id DESC LIMIT :limit OFFSET :offset";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', (int)$offset, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTotalSinhVien()
    {
        $query = "SELECT COUNT(*) as total FROM sinhvien";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }

    public function getSinhVienById($id)
    {
        $query = "SELECT * FROM sinhvien WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
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

    public function updateSinhVien($id, $data)
    {
        $query = "UPDATE sinhvien SET ma_sv = :ma_sv, ho_ten = :ho_ten, gioi_tinh = :gioi_tinh, ngay_sinh = :ngay_sinh, dia_chi = :dia_chi, lop = :lop WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $params = [
            ':id' => $id,
            ':ma_sv' => $data['ma_sv'],
            ':ho_ten' => $data['ho_ten'],
            ':gioi_tinh' => $data['gioi_tinh'],
            ':ngay_sinh' => $data['ngay_sinh'],
            ':dia_chi' => $data['dia_chi'],
            ':lop' => $data['lop'],
        ];
        return $stmt->execute($params);
    }

    public function deleteSinhVien($id)
    {
        $query = "DELETE FROM sinhvien WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([':id' => $id]);
    }
}
?>