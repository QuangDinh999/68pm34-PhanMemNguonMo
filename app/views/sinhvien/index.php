<h1><?php echo htmlspecialchars($title ?? 'Danh sách sinh viên'); ?></h1>
<p><a href="?url=sinhvien/create">Thêm sinh viên</a></p>

<?php if (!empty($sinhviens)) : ?>
    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th>Mã SV</th>
                <th>Họ tên</th>
                <th>Giới tính</th>
                <th>Ngày sinh</th>
                <th>Địa chỉ</th>
                <th>Lớp</th>
                <th>Thao tác</th>
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
                    <td align="center">
                        <a href="?url=sinhvien/edit/<?php echo $sv['id']; ?>">Sửa</a> | 
                        <a href="?url=sinhvien/delete/<?php echo $sv['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xoá sinh viên này?')">Xoá</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Phân trang -->
    <div style="margin-top: 20px;">
        <?php if ($currentPage > 1) : ?>
            <a href="?url=sinhvien/index/<?php echo $currentPage - 1; ?>">« Trước</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
            <a href="?url=sinhvien/index/<?php echo $i; ?>" style="<?php echo $i == $currentPage ? 'font-weight: bold; text-decoration: underline;' : ''; ?>">
                <?php echo $i; ?>
            </a>
        <?php endfor; ?>

        <?php if ($currentPage < $totalPages) : ?>
            <a href="?url=sinhvien/index/<?php echo $currentPage + 1; ?>">Sau »</a>
        <?php endif; ?>
    </div>
<?php else : ?>
    <p>Chưa có sinh viên nào.</p>
<?php endif; ?>