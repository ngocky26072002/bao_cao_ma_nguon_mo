<?php
if(isset($_POST['dangnhap'])){
    // Kiểm tra xem 'email' đã được gửi hay chưa
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        $matkhau = md5($_POST['matkhau']);
        $sql = "SELECT * FROM dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
        $result = mysqli_query($mysqli, $sql);
        $count = mysqli_num_rows($result);
        
        if($count > 0){
            // Sử dụng mysqli_fetch_assoc để lấy dữ liệu từ kết quả truy vấn
            $row = mysqli_fetch_assoc($result);
            $_SESSION['dangky'] = $row['tenkhachhang'];
            header('Location: index.php?quanli=giohang');
        } else {
            echo '<p style="color:red">Email hoặc mật khẩu sai</p>';
        }
    } else {
        echo '<p style="color:red">Vui lòng nhập địa chỉ email</p>';
    }
}
?>

<form action="" autocomplete="" method="POST">
        <table border="1" class="table_login" style="text-align:center;border-collapse:collapse;">
            <tr>
                <td colspan="2">
                    <h3>Đăng nhập khách hàng</h3>
                </td>
            </tr>
            <tr>
                <td>Tài khoản</td>
                <td><input type="text" name="email" placeholder="Email..."></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="text" name="matkhau" placeholder="Mật khẩu..."></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="dangnhap" value="Đăng nhập">
                </td>
            </tr>
        </table>
    </form>