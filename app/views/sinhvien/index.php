<h1><?php echo htmlspecialchars($title ?? 'Danh sách sinh viên'); ?></h1>
<p><a href="?url=sinhvien/create">Thêm sinh viên</a></p>

<?php if (!empty($sinhviens)) : ?>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Mã SV</th>
                <th>Họ tên</th>
                <th>Giới tính</th>
                <th>Ngày sinh</th>
                <th>Địa chỉ</th>
                <th>Lớp</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sinhviens as $sv) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($sv['ma_sv'] ?? ''); ?></td>
                    <td><?php echo htmlspecialchars($sv['ho_ten'] ?? ''); ?></td>
                    <td><?php echo htmlspecialchars($sv['gioi_tinh'] ?? ''); ?></td>
                    <td><?php echo htmlspecialchars($sv['ngay_sinh'] ?? ''); ?></td>
                    <td><?php echo htmlspecialchars($sv['dia_chi'] ?? ''); ?></td>
                    <td><?php echo htmlspecialchars($sv['lop'] ?? ''); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else : ?>
    <p>Chưa có sinh viên nào.</p>
<?php endif; ?>