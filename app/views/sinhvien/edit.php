<h1>Sửa sinh viên</h1>

<form action="?url=sinhvien/update/<?php echo $sinhvien['id']; ?>" method="post">
    <div style="margin-bottom: 10px;">
        <label for="ma_sv">Mã sinh viên</label><br>
        <input type="text" id="ma_sv" name="ma_sv" value="<?php echo htmlspecialchars($sinhvien['ma_sv'] ?? ''); ?>" required>
    </div>

    <div style="margin-bottom: 10px;">
        <label for="ho_ten">Họ và tên</label><br>
        <input type="text" id="ho_ten" name="ho_ten" value="<?php echo htmlspecialchars($sinhvien['ho_ten'] ?? ''); ?>" required>
    </div>

    <div style="margin-bottom: 10px;">
        <label>Giới tính</label><br>
        <label><input type="radio" name="gioi_tinh" value="Nam" <?php echo ($sinhvien['gioi_tinh'] ?? '') == 'Nam' ? 'checked' : ''; ?> required> Nam</label>
        <label><input type="radio" name="gioi_tinh" value="Nữ" <?php echo ($sinhvien['gioi_tinh'] ?? '') == 'Nữ' ? 'checked' : ''; ?>> Nữ</label>
    </div>

    <div style="margin-bottom: 10px;">
        <label for="ngay_sinh">Ngày sinh</label><br>
        <input type="date" id="ngay_sinh" name="ngay_sinh" value="<?php echo htmlspecialchars($sinhvien['ngay_sinh'] ?? ''); ?>" required>
    </div>

    <div style="margin-bottom: 10px;">
        <label for="dia_chi">Địa chỉ</label><br>
        <input type="text" id="dia_chi" name="dia_chi" value="<?php echo htmlspecialchars($sinhvien['dia_chi'] ?? ''); ?>" required>
    </div>

    <div style="margin-bottom: 10px;">
        <label for="lop">Lớp</label><br>
        <input type="text" id="lop" name="lop" value="<?php echo htmlspecialchars($sinhvien['lop'] ?? ''); ?>" required>
    </div>

    <button type="submit">Cập Nhật Sinh Viên</button>
    <a href="?url=sinhvien/index">Quay lại danh sách</a>
</form>