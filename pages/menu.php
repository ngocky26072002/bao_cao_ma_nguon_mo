<?php
$sql_danhmuc = "SELECT * FROM danhmuc ORDER BY id DESC";
$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
?>

<?php
if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
    unset($_SESSION['dangky']);
}
?>
<div class="menu">
    <ul class="list_menu">
        <li><a href="index.php">Trang chủ</a></li>
        <li><a href="index.php?quanli=giohang">Giỏ hàng</a></li>
        <li><a href="index.php?quanli=lienhe">Liên hệ</a></li>
        <?php
            if(isset($_SESSION['dangky'])) {
        ?>
                <li><a href="index.php?dangxuat=1">Đăng xuất</a></li>
        <?php
            }else {
        ?>
                <li><a href="index.php?quanli=dangky">Đăng ký</a></li>
        <?php
            }
        ?>
        <li>
        <form class="timkiem" action="index.php?quanli=timkiem" method="POST">
        <input type="text" placeholder="Tìn kiếm..." name="tukhoa">
        <input type="submit" name="timkiem" value="Tìm kiếm">
        </form>
        </li>
    </ul>
    
</div>