<h1>Thêm sinh viên</h1>

<form action="?url=sinhvien/store" method="post">
    <div style="margin-bottom: 10px;">
        <label for="ma_sv">Mã sinh viên</label><br>
        <input type="text" id="ma_sv" name="ma_sv" placeholder="VD: SV001" required>
    </div>

    <div style="margin-bottom: 10px;">
        <label for="ho_ten">Họ và tên</label><br>
        <input type="text" id="ho_ten" name="ho_ten" placeholder="Nhập họ tên sinh viên" required>
    </div>

    <div style="margin-bottom: 10px;">
        <label>Giới tính</label><br>
        <label><input type="radio" name="gioi_tinh" value="Nam" required> Nam</label>
        <label><input type="radio" name="gioi_tinh" value="Nữ"> Nữ</label>
    </div>

    <div style="margin-bottom: 10px;">
        <label for="ngay_sinh">Ngày sinh</label><br>
        <input type="date" id="ngay_sinh" name="ngay_sinh" required>
    </div>

    <div style="margin-bottom: 10px;">
        <label for="dia_chi">Địa chỉ</label><br>
        <input type="text" id="dia_chi" name="dia_chi" placeholder="Nhập địa chỉ" required>
    </div>

    <div style="margin-bottom: 10px;">
        <label for="lop">Lớp</label><br>
        <input type="text" id="lop" name="lop" placeholder="VD: CNTT21" required>
    </div>

    <button type="submit">Thêm Sinh Viên</button>
    <a href="?url=sinhvien/index">Quay lại danh sách</a>
</form>