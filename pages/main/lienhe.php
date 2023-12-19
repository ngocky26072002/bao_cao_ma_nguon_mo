<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Liên hệ</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }
    .container {
      width: 80%;
      margin: auto;
      overflow: hidden;
    }
    #contact-form {
      background: #f9f9f9;
      padding: 30px;
      margin-top: 50px;
      border-radius: 5px;
    }
    #contact-form label {
      display: block;
      font-weight: bold;
    }
    #contact-form input[type="text"],
    #contact-form textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    #contact-form input[type="submit"] {
      width: 100%;
      padding: 8px;
      border: none;
      background: #333;
      color: #fff;
      border-radius: 5px;
      cursor: pointer;
    }
    #contact-form input[type="submit"]:hover {
      background: #555;
    }
    .contact-info {
      background: #f9f9f9;
      padding: 20px;
      margin-top: 20px;
      border-radius: 5px;
    }
  </style>
</head>
<body>

<div class="container">
  <div id="contact-form">
    <h2>Liên hệ</h2>
    <form action="process_contact_form.php" method="post">
      <label for="name">Họ và tên:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="text" id="email" name="email" required>

      <label for="message">Tin nhắn:</label>
      <textarea id="message" name="message" rows="4" required></textarea>

      <input type="submit" name="gui" value="Gửi">
</div>
    </form>

      <div class="contact-info">
      <h2>Thông tin liên hệ</h2>
      <p>Địa chỉ: Số 86, Nguyễn Huệ, Phường 4, Quận 1, Thành phố Hồ Chí Minh</p>
      <p>Số điện thoại: 0843919989</p>
      <p>Email: quangky@cuahanglaptop.com</p>
    </div>
</div>

</body>
</html>

<?php
$mysqli = new mysqli("localhost", "root", "", "laptop_world");

// Check connection
if ($mysqli->connect_errno) {
    echo "Kết nối với MySQLi lỗi" . $mysqli->connect_error;
    exit();
}

$ten=$_POST['ten'];
$email=$_POST['email'];
$message=$_POST['message'];

if(isset($_POST['gui'])){
    //them
    $sql_them= "INSERT INTO contact(ten_contact, email, message) VALUE('".$ten."','".$email."','".$message."')";
    mysqli_query($mysqli, $sql_them);
    // header('Location:../../index.php?action=quanlidanhmucsanpham&query=them');
// }elseif(isset($_POST['suadanhmuc'])){
//     //sua
//     $sql_update= "UPDATE danhmuc SET ten='".$tenloaisp."', email='".$thutu."' WHERE id='$_GET[iddanhmuc]'";
//     mysqli_query($mysqli, $sql_update);
//     header('Location:../../index.php?action=quanlidanhmucsanpham&query=them');
// }else{
//     $id=$_GET['iddanhmuc'];
//     $sql_xoa="DELETE FROM danhmuc WHERE id='".$id."' ";
//     mysqli_query($mysqli, $sql_xoa);
//     header('Location:../../index.php?action=quanlidanhmucsanpham&query=them');
 }
 ?>
