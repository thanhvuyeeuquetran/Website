<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Thiết lập kiểu cho phần tiêu đề "Thêm sản phẩm" */
p {
    font-size: 24px;
    font-weight: bold;
    color: darkgoldenrodblue transparent;
    text-align: center;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Thiết lập kiểu cho bảng và ô input */
table {
  width: 50%;
  border-collapse: collapse;
  margin: 20px auto;
}

td {
  padding: 10px;
}

input[type="text"],
input[type="file"],
textarea,
select {
  width: 100%;
  padding: 8px;
  margin: 4px 0;
  box-sizing: border-box;
}

/* Thiết lập kiểu cho nút submit */
input[type="submit"] {
  background-color: #4caf50;
  color: #fff;
  padding: 10px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

/* Thiết lập kiểu khi di chuột qua nút submit */
input[type="submit"]:hover {
  background-color: #45a049;
}

    </style>
</head>
<body>
    
<p>Thêm sản phẩm </p>
<table border="1px" width="50%" style="border-collapse:collapse;">
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
        <td colspan="2"><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
    </tr>
</form>
</table>
</body>
</html>