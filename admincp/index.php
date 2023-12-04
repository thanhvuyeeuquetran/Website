<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admincp</title>
    <link rel="stylesheet" type="text/css" href="admincss/styleadmincp.css">
    <link rel="stylesheet" type="text/css" href="admincss/footeradmin.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-hUNqzt+UksL3iT3MD8rjbC06nUcU7gR62X62AzgE2kAp0Uo3UGlPf63+ZG5JvQpjfr+7tiNNiA6CDdHsEWuOtsw==" crossorigin="anonymous" />
 
    <style>
        .title_admin {
  background-color: #333;
  color: #fff;
  padding: 20px;
  text-align: center;
  margin-bottom: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

    </style>
</head>
<body>
    <h3 class="title_admin">Welcome to Admincp</h3>
    <div class="">
    <?php
            include("config/config.php");
            include("modules/header.php");
            include("modules/menu.php");
            include("modules/main.php");
            include("modules/footer.php");
            
        ?>
    </div>
</body>
</html>