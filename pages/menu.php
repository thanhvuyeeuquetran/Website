<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        body {
    padding-top: 56px; /* Điều này giúp giữ phần nội dung dưới thanh menu khi nó được "fixed" */
  }

  .navbar.fixed-top {
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1050;
  }
        .navbar {
    background-color: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
        .navbar-brand img {
            margin-right: 10px;
            vertical-align: middle;
        }

        .navbar-toggler {
            border: none;
        }

        .navbar-nav .nav-item {
            margin-right: 10px;
        }

        .form-inline {
            margin-left: auto;
        }
        .modal {
  position: fixed;
  /* Các thuộc tính vị trí khác nếu cần thiết */
}
        .auth-form {
            display: none;
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 500%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
        }

        .auth-form input,
        .auth-form button {
            margin-bottom: 10px;
        }

        .auth-form p {
            margin-top: 10px;
        }

        #myVideo {
            width: 100%;
            height: auto;
            z-index: 1;
        }

        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.5);
            color: #f1f1f1;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .content h1 {
            margin-bottom: 20px;
        }

        #myBtn {
            width: 200px;
            font-size: 18px;
            padding: 10px;
            border: none;
            background: ;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
        }

        #myBtn:hover {
            background: #ddd;
            color: black;
        }

        hr {
            border: 0;
            height: 4px;
            background: #333;
            margin: 20px 0;
        }
        .form-inline button {
            color: #333;
        }   
        .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
        background: none;
        border: none;
        font-size: 20px;
        color: #fff;
}
.navbar-brand img {
      width: 50px;
      height: 35px;
    }

    .navbar .cart-icon {
      margin-left: 0px;
      cursor: pointer;
    }
    form-inline {
    margin-right: 0px; /* Điều này giảm khoảng cách bên phải của thanh tìm kiếm */
  }

  .cart-icon,
  .heart-icon,
  .cart-icon.dropdown-toggle {
    margin-right: 100px; /* Khoảng cách giữa biểu tượng giỏ hàng, trái tim và dropdown */
    cursor: pointer;
  }

  .dropdown-menu {
    margin-right: 0; /* Khoảng cách giữa biểu tượng personal và dropdown menu */
  }
  .modal-dialog {
      max-width: 400px;
    }

    /* Định dạng style cho nội dung modal */
    .modal-content {
      padding: 20px;
      border-radius: 10px;
      background-color: #000;
      color: #fff;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .modal-checkbox {
      margin-top: 15px;
    }
    #cartForm {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            /* Thêm các kiểu dáng khác tùy thuộc vào thiết kế của bạn */
        }
    </style>
</head>
<body>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top navbar navbar-expand-lg navbar-light bg-light navbar-inverse navbar-fixed-top fixed-top">
<a class="navbar-brand" id="logo" href="#">
  <img src="./images/logo.jpg" alt="My Logo" width="50" height="35"> Z-Watch
</a>
  <script>
  document.getElementById('logo').addEventListener('click', function() {
    window.location.href = "http://localhost:8080/Do_An_Clock/";
    // Ví dụ: window.location.href = '/your-page'; (thay đổi '/your-page' thành đường dẫn bạn muốn chuyển đến)
  });
</script>
 <!-- Bổ sung sự kiện onclick vào biểu tượng "Đăng nhập" -->
<button class="navbar-toggler" type="button" data-toggle="modal" data-target="#loginModal" onclick="showLoginForm()">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
          <li class="nav-item active">
              <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#news-section">News</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#contact-section">Contact</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                  Services
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mức Giá</a>
                  <a class="dropdown-item" href="#">Loại Máy</a>
                  <a class="dropdown-item" href="#">Chất Liệu Dây</a>
                  <a class="dropdown-item" href="#">Thương Hiệu</a>
                  <a class="dropdown-item" href="#">Sản Phẩm Khác</a>
                  <a class="dropdown-item" href="#">Sửa Đồng Hồ</a>
                  <a class="dropdown-item" href="#">Đồng Hồ Treo Tường</a>
                  <a class="dropdown-item" href="#">Đồng Hồ Đôi</a>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#flip">Map</a>
          </li>
      </ul> 
  </div>
  <button class="navbar-toggler" type="button" data-toggle="modal" data-target="#loginModal">
  <span class="navbar-toggler-icon"></span>
</button>
  </button>
  <form class="form-inline">
  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  <div class="dropdown">
<!-- Thêm một thẻ span khác để chứa biểu tượng khi đăng xuất -->
<span id="userIcon" class="cart-icon" onclick="openUserProfile()" style="display: inline-block; margin-right: 10px;">
  👤
</span>

<!-- Add the following logout option with inline CSS, initially hidden -->
<div id="logoutOption" style="display: none; position: absolute; background-color: white; color: #333; padding: 10px; z-index: 1;">
  <button onclick="logout()">Logout</button>
</div>

<script>
function openUserProfile() {
  // Toggle the display of the logout option
  var logoutOption = document.getElementById("logoutOption");
  logoutOption.style.display = (logoutOption.style.display === "none" || logoutOption.style.display === "") ? "block" : "none";
}
function logout() {
  // Implement your logout logic here
  // For example, redirect the user to the logout page or perform necessary actions
  alert("Logout logic goes here");

  // Redirect to the login page
  window.location.href = "http://localhost:8080/Do_An_Clock/pages/main/db/login.php"; // Thay "login.html" bằng đường dẫn đến trang đăng nhập của bạn
}
</script>

<div id="cartInfo" style="display: inline-block; margin-right: 10px; text-align: center;">
  <span id="cartItemCount">0</span><a href="#" onclick="showCart()">🛒</a>
</div>

    <!-- Form giỏ hàng -->
    <div id="cartForm">
        <!-- Thông tin sản phẩm trong giỏ hàng -->
        <!-- Thay thế nội dung sau đây bằng dữ liệu thực từ giỏ hàng của bạn -->
        <h3>Thông tin sản phẩm trong giỏ hàng</h3>
        <ul id="cartItemList">
        <li>
            <span class="productName">Product 1</span>
            <span class="productPrice">$10</span>
        </li>

        <!-- Ví dụ: Thêm sản phẩm 2 -->
        <li>
            <span class="productName">Product 2</span>
            <span class="productPrice">$20</span>
        </li>
        </ul>
        <input type="submit" value="Checkout">
    </div>

    <script>
        function showCart() {
            var cartForm = document.getElementById("cartForm");
            var cartItemList = document.getElementById("cartItemList");

            // Đoạn này làm rỗng danh sách sản phẩm trước khi thêm lại
            cartItemList.innerHTML = "";

            // Thêm thông tin sản phẩm vào danh sách
            // Đây chỉ là ví dụ, bạn cần thay thế bằng dữ liệu thực từ giỏ hàng của bạn
            // Ví dụ: có thể là một mảng sản phẩm được lưu trong biến JavaScript
            var productsInCart = [
                { name: "Product 1", price: "$10" },
                { name: "Product 2", price: "$20" },
                // Thêm các sản phẩm khác vào đây
            ];

            productsInCart.forEach(function (product) {
                var listItem = document.createElement("li");
                listItem.textContent = product.name + " - " + product.price;
                cartItemList.appendChild(listItem);
            });

            // Hiển thị form giỏ hàng
            cartForm.style.display = "block";
        }
    </script>
  <span class="heart-icon" onclick="addToFavorites()" style="display: inline-block; margin-right: 10px;">
  ❤️
</span>
</form>
</div>
</nav>
    <button class="navbar-toggler" type="button" data-toggle="modal" data-target="#registerModal" onclick="openRegisterModal()">
    <span class="navbar-toggler-icon"></span>
</button>
</nav>
<script>
    function openCart() {
      // Xử lý khi người dùng ấn vào biểu tượng giỏ hàng
      console.log("Open Cart");
      // Thêm mã xử lý mở giỏ hàng ở đây (nếu cần)
    }
  </script>
  <!-- Thêm script để thêm vào danh sách yêu thích -->
<script>
  function addToFavorites() {
    // Xử lý khi người dùng ấn vào biểu tượng trái tim
    console.log("Add to Favorites");
    // Thêm mã xử lý thêm vào danh sách yêu thích ở đây (nếu cần)
  }
</script>

</body>
</html>

