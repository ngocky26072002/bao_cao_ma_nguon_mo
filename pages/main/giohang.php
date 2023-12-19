
<p>Giỏ hàng: 
    <?php
    if(isset($_SESSION['dangky'])){
        echo $_SESSION['dangky'];
    }
    ?>
</p>
<?php
if (isset($_SESSION["cart"])) {

}
?>
<table style="width:100%;text-align:center;border-collapse:collapse;" border="1">
    <tr>
        <th>Id</th>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
        <!-- <th>Quản lí</th> -->
    </tr>
    <?php
    if (isset($_SESSION["cart"])) {
        $i = 0;
        $tongtien = 0;
        foreach ($_SESSION["cart"] as $cart_item) {

            $soluong = intval($cart_item['soluong']);
            $giasp = str_replace('.', '', $cart_item['giasp']); // Loại bỏ dấu chấm để chuyển đổi thành số
    
            // Chuyển đổi giá sản phẩm thành số
            $giasp_numeric = is_numeric($giasp) ? floatval($giasp) : 0;

            // Tính toán thành tiền và định dạng kết quả giống như giá sản phẩm
            $thanhtien = number_format($soluong * $giasp_numeric, 0, ',', '.');
            $tongtien += floatval(str_replace('.', '', $thanhtien));
            $tongtien_formatted = number_format($tongtien, 0, ',', '.');

            $i++;
            ?>
            <tr>
                <td>
                    <?php echo $i; ?>
                </td>
                <td>
                    <?php echo $cart_item['masp']; ?>
                </td>
                <td>
                    <?php echo $cart_item['tensanpham']; ?>
                </td>
                <td>
                    <img src="admincp/module/quanlisanpham/uploads/<?php echo $cart_item['hinhanh']; ?>" width="150px">

                </td>
                <td>
                    <?php echo $cart_item['soluong']; ?>
                </td>
                <td>
                    <?php echo $cart_item['giasp']; ?>vnđ
                </td>
                <td>
                    <?php echo $thanhtien; ?>vnđ
                </td>
                <!-- <td><a href="">Xóa</a></td> -->
            </tr>

            <?php
        }

        ?>
        <tr>
            <td colspan="8">

                <p style=" float:left; ">Tổng tiền:
                    <?php echo $tongtien_formatted ?>vnđ
                </p></br>
                <!-- <p style=" float:left; "><a href="">Xóa tất cả</a></p> -->
                <?php
                    if(isset($_SESSION['dangky'])) {
                ?>
                <a href="index.php?quanli=thanhtoan">Đặt hàng</a>
                <?php
                    }else{
                        ?>
                        <p><a href="index.php?quanli=dangky">Đăng ký đặt hàng</a></p>
                        <?php
                    }
                    ?>
            </td>

        </tr>
        <?php

    } else {
        ?>
        <tr>
            <th colspan="8">
                <p>Hiện tại giỏ hang trống</p>
            </th>

        </tr>
        <?php
    }
    ?>
</table>