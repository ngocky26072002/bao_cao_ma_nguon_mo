<?php
if(isset($_POST['dangnhap'])){
    // Kiểm tra xem 'email' đã được gửi hay chưa
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        $matkhau = md5($_POST['matkhau']);
        $sql = "SELECT * FROM dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
        $result = mysqli_query($mysqli, $sql);
        $count = mysqli_num_rows($result);
        
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