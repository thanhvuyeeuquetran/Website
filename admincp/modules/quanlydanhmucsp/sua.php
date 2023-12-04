<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Thiết lập kiểu cho phần tiêu đề "Sửa danh mục sản phẩm" */
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

/* Thiết lập kiểu cho bảng và ô input */
table {
  width: 50%;
  border-collapse: collapse;
  margin: 20px auto;
}

td {
  padding: 10px;
}

input[type="text"] {
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
<?php
    $sql_sua_danhmucsp="SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
    $query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>
<p>Sửa danh mục sản phẩm </p>
<table border="1px" width="50%" style="border-collapse:collapse;">
<form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
    <?php
    while($dong = mysqli_fetch_array($query_sua_danhmucsp)){
    ?>
    <tr>
        <td>Tên danh mục</td>
        <td><input type="text"value="<?php echo $dong['tendanhmuc']?>" name="tendanhmuc"</td>
    </tr>
    <tr>
        <td>Thứ tự</td>
        <td><input type="text"value="<?php echo $dong['thutu']?>" name="thutu"</td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
    </tr>
    <?php
    }
    ?>
</form>
</table>
</body>
</html>