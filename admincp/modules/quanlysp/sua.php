<?php
    $sql_sua_sp="SELECT * FROM tbl_sanpham WHERE id_danhmuc='$_GET[idsanpham]' LIMIT 1";
    $query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>

<p>Sửa sản phẩm </p>
<table border="1px" width="50%" style="border-collapse:collapse;">

<?php
while ($row = mysqli_fetch_array($query_sua_sp)) {
?>
<form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
    <tr>
        <td>Tên sản phẩm</td>
        <td><input type="text" name="tensanpham"</td>
    </tr>

    <tr>
        <td>Mã sp</td>
        <td><input type="text" name="masp"</td>
    </tr>

    <tr>
        <td>Giá sp</td>
        <td><input type="text" name="giasp"</td>
    </tr>

    <tr>
        <td>Số lượng</td>
        <td><input type="text" name="soluong"</td>
    </tr>

    <tr>
        <td>Hình ảnh</td>
        <td><input type="file" name="hinhanh"</td>
    </tr>

    <tr>
        <td>Tóm tắt</td>
        <td><textarea rows="10" name="tomtat" style="resize: none"></textarea></td>
    </tr>

    <tr>
        <td>Nội dung</td>
        <td><textarea rows="10" name="noidung" style="resize: none"></textarea></td>
    </tr>


    <tr>
        <td>Tình trạng</td>
        <td>
            <select name="tinhtrang">
                <option value="1">Kích hoạt</option>
                <option value="0">Ẩn</option>
            </select>
        </td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="suasanpham" value="Thêm sản phẩm"></td>
    </tr>
</form>
<?php
}
?>
</table>