<?php
session_start();
if (!isset($_SESSION["dangnhap"])) {
    header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styleadmincp.css">
    <title>Admincp</title>
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js">
    </script>
    <script src="https://cdn.ckeditor.com/4.23.0-lts/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('tomtat');
        CKEDITOR.replace('noidung');
    </script> -->
</head>

<body>
    <h3 class="title_admincp" style="css">Welcome to admin</h3>
    <div class="wraper">
        <?php
        include("config/config.php");
        include("module/header.php");
        include("module/menu.php");
        include("module/main.php");
        ?>
    </div>
    
</body>

</html>