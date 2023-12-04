<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Thiết lập kiểu cho danh sách ul */
.admincp_list {
  list-style: none;
  padding: 0;
  margin: 0;
}

/* Thiết lập kiểu cho mỗi mục trong danh sách */
.admincp_list li {
  margin: 5px 0;
}

/* Thiết lập kiểu cho liên kết trong mỗi mục */
.admincp_list a {
  text-decoration: none;
  color: #333;
  display: block;
  padding: 10px;
  background-color: #f0f0f0;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

/* Thiết lập kiểu khi di chuột qua liên kết */
.admincp_list a:hover {
  background-color: #ddd;
}

    </style>
</head>
<body>
    
<ul class="admincp_list">
    <li> <a href="index.php?action=quanlydanhmucsanpham&query=them"> Quản lý danh mục sản phẩm</a></li>
    <li> <a href="index.php?action=quanlysp&query=them"> Quản lý sản phẩm</a></li>
    <li> <a href="index.php?action=quanlybaiviet&query=them"> Quản lý bài viết</a></li>
    <li> <a href="index.php?action=quanlydanhmucbaiviet&query=them"> Quản lý danh mục bài viết</a></li>
</ul>
</body>
</html>