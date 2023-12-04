<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Z-WATCH</title>
    <link rel="icon" type="image/x-icon" href="./images/logo.jpg">
    <link rel="stylesheet" type="text/css" href="./css/menu.css" />
    <link rel="stylesheet" href="./admincp/admincss/styleadmincp.css" />
    <link rel="stylesheet" type="text/css" href="./css/news.css" />
    <link rel="stylesheet" type="text/css" href="./css/footer.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-hUNqzt+UksL3iT3MD8rjbC06nUcU7gR62X62AzgE2kAp0Uo3UGlPf63+ZG5JvQpjfr+7tiNNiA6CDdHsEWuOtsw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/style.css"/>
    <link rel="stylesheet" href="./css/lightbulb.css"/>

    <link rel="stylesheet" type="text/css" href="path/to/your/css/style.css">
    <style>
      .back-to-home {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        background-color: #000;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 20px;
        text-decoration: none;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        z-index: 9999; /* Giá trị z-index lớn hơn để đảm bảo hiển thị trên cùng */
      }
    </style>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
   
  </head>
  <body>
  <a href="#aboutUsContainer" class="back-to-home">🖕</a>
    <div class="">
      <?php
            include("pages/menu.php");
            include("pages/header.php");
            include("pages/main.php");
            include("pages/main/tintuc.php");
            include("pages/main/map.php");
            include("pages/main/lienhe.php");      
            include("pages/footer.php");
        ?>
    </div>
  </body>
</html>
