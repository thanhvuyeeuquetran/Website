<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Thiết lập kiểu cho phần tiêu đề "Liệt kê danh mục sản phẩm" */
        p {
  font-size: 24px;
  font-weight: bold;
  color: darkgoldenrodblue transparent;
  padding: 10px;
  text-align: center;
  margin-bottom: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Thiết lập kiểu cho bảng */
table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

/* Thiết lập kiểu cho các ô trong bảng */
th, td {
  padding: 10px;
  border: 1px solid #ddd;
  text-align: left;
}

/* Thiết lập kiểu cho hàng đầu tiên (tiêu đề cột) của bảng */
th {
  background-color: #f2f2f2;
}

/* Thiết lập kiểu cho các liên kết trong cột "Quản Lý" */
td a {
  text-decoration: none;
  color: #3498db;
  font-weight: bold;
}

/* Thiết lập kiểu khi di chuột qua liên kết */
td a:hover {
  color: #2980b9;
}

    </style>
</head>
<body>
    
<?php
    $sql_lietke_danhmucsp="SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
    $query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>
<p>Liệt kê danh mục sản phẩm</p>
<table style="width:100%" border="1" style="border-collapse: collapse;">
<tr>
    <th>ID</th>
    <th> tên danh mục</th>
    <th>Quản Lý</th>
</tr>
<?php
$i=0;
while($row=mysqli_fetch_array($query_lietke_danhmucsp)){
    $i++;
?>
<tr>
    <td><?php echo $i?></td>
    <td><?php echo $row['tendanhmuc']?></td>
    <td>
        <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xoá </a> | <a href="
        ?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a>
    </td>
</tr>
<?php
}
?>
</table>
</body>
</html>