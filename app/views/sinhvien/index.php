<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
</head>
<body>
    <h1>Danh sách sinh viên</h1>
    <table>
    <tr>
        <th> STT </th>
        <th> Mã sinh viên </th>
        <th> Họ tên </th>
        <th> Giới tính </th>
        <th> Ngày sinh </th>
        <th> Địa chỉ </th>
        <th> Lớp </th>
    </tr>
    <?php foreach ($sinhviens as $index => $sinhvien): ?>
        <tr>
            <td> <?php echo $index + 1; ?> </td>
            <td> <?php echo $sinhvien['ma_sv']; ?> </td>
            <td> <?php echo $sinhvien['ho_ten']; ?> </td>
            <td> <?php echo $sinhvien['gioi_tinh']; ?> </td>
            <td> <?php echo $sinhvien['ngay_sinh']; ?> </td>
            <td> <?php echo $sinhvien['dia_chi']; ?> </td>
            <td> <?php echo $sinhvien['lop']; ?> </td>
        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html> 