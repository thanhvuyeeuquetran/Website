<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register</title>
    <style>
        body, html {
            height: 100%;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        * {
            box-sizing: border-box;
        }

        .bg-img {
            background-image: url("../../../images/about1.jpg");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            max-width: 400px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            backdrop-filter: blur(8px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type=text]:focus, input[type=password]:focus {
            outline: none;
            background-color: #ddd;
        }

        .btn {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
            border-radius: 5px;
        }

        .btn:hover {
            opacity: 1;
        }

        .register-link {
            text-align: center;
            margin-top: 10px;
        }

        .register-link a {
            text-decoration: none;
            color: #04AA6D;
        }

        .checkbox-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        #register-form {
            display: none;
        }
    </style>
</head>
<body>
<?php
session_start();

// Khởi tạo biến thông báo lỗi
$error_message = '';

if (isset($_POST['dangnhap'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Thực hiện kiểm tra thông tin đăng nhập từ cơ sở dữ liệu
    if (kiemTraDangNhap($email, $password)) {
        // Kiểm tra vai trò của người dùng và chuyển hướng tới trang tương ứng
        if ($email == 'admin@gmail.com') {
            // Nếu là admin, chuyển hướng tới trang admin
            $_SESSION['user_role'] = 'admin';
            header('Location: http://localhost:8080/Do_An_Clock/admincp/');
            exit();
        } elseif ($email == 'user@gmail.com' && $password == 'th') {
            // Nếu là người dùng và mật khẩu là 'th', chuyển hướng tới trang index.php của người dùng
            $_SESSION['user_role'] = 'user';
            header('Location: http://localhost:8080/Do_An_Clock/index.php');
            exit();
        } else {
            // Nếu là người dùng thông thường, chuyển hướng tới trang index.php
            $_SESSION['user_role'] = 'user';
            header('Location: http://localhost:8080/Do_An_Clock/');
            exit();
        }
    } else {
        // Gán thông báo lỗi khi đăng nhập không thành công
        $error_message = "Tên đăng nhập hoặc mật khẩu không đúng.";
    }
}

function kiemTraDangNhap($username, $password) {
    // Thực hiện kiểm tra thông tin từ cơ sở dữ liệu
    // Đây chỉ là một ví dụ, bạn cần sử dụng kết nối thực tế đến cơ sở dữ liệu của bạn
    $storedUsername = 'admin@gmail.com';
    $storedPasswordHash = password_hash('123', PASSWORD_DEFAULT); // Đây là mật khẩu đã được hash
    $storedUsername1 = 'user@gmail.com';
    $storedPasswordHash1 = password_hash('123', PASSWORD_DEFAULT); // Đây là mật khẩu đã được hash
    if ($username == $storedUsername && password_verify($password, $storedPasswordHash)) {
        // Nếu kiểm tra đúng, trả về true
        return true;
    } elseif ($username == $storedUsername1 && password_verify($password, $storedPasswordHash1)) {
        return true;
    } else {
        // Ngược lại, trả về false
        return false;
    }
}
?>
<div class="bg-img">
    <div class="container" id="login-form">
        <form action="login.php" method="post">
            <h1>Login</h1>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <div class="checkbox-container">
                <input type="checkbox" id="rememberMe" name="rememberMe">
                <label for="rememberMe">Remember Me</label>
            </div>

            <!-- Hiển thị thông báo lỗi -->
            <?php if (!empty($error_message)): ?>
                <div style="color: red;"><?php echo $error_message; ?></div>
            <?php endif; ?>

            <button type="submit" class="btn" name="dangnhap">Login</button>
        </form>

        <div class="register-link">
            <p>Don't have an account? <a href="#" onclick="toggleForms()">Register here</a>.</p>
        </div>
    </div>


    <div class="container" id="register-form">
        <form action="registration.php" method="post">
            <h1>Register</h1>

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required>

            <label for="age"><b>Age</b></label>
            <input type="text" placeholder="Enter Age" name="age" required>

            <label for="phone"><b>Phone Number</b></label>
            <input type="text" placeholder="Enter Phone Number" name="phone" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <label for="confirm_psw"><b>Confirm Password</b></label>
            <input type="password" placeholder="Confirm Password" name="confirm_password" required>

            <button type="submit" class="btn" name="dangki">Register</button>

            <div class="register-link">
                <p>Already have an account? <a href="#" onclick="toggleForms()">Login here</a>.</p>
            </div>
        </form>
    </div>
</div>

<script>
    function toggleForms() {
        var loginForm = document.getElementById('login-form');
        var registerForm = document.getElementById('register-form');

        if (loginForm.style.display === 'block') {
            loginForm.style.display = 'none';
            registerForm.style.display = 'block';
        } else {
            loginForm.style.display = 'block';
            registerForm.style.display = 'none';
        }
    }
</script>
</body>
</html>



