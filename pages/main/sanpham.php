<p>Chi tiết sản phẩm</p>
<?php
$sql_chitiet = "SELECT * FROM danhmuc,sanpham WHERE sanpham.id_danhmuc=danhmuc.id 
AND sanpham.id_sanpham='$_GET[id]' LIMIT 1";
$query_chitiet = mysqli_query($mysqli, $sql_chitiet);
while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
    ?>
    <div class="wraper_chitiet">
        <div class="hinhanh_sanpham">
            <img width="100%" src="admincp/module/quanlisanpham/uploads/<?php echo $row_chitiet['hinhanh'] ?>" alt="">
        </div>
        <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
            <div class="chitiet_sanpham">
                <h3>Tên sản phẩm:
                    <?php echo $row_chitiet['tensanpham'] ?>
                </h3>
                <p>Mã sản phẩm:
                    <?php echo $row_chitiet['masp'] ?>
                </p>
                <p>Giá Sản phẩm:
                    <?php echo $row_chitiet['giasp'] ?>vnđ
                </p>
                <p>Số lượng:
                    <?php echo $row_chitiet['soluong'] ?>
                </p>
                <p>Danh mục:
                    <?php echo $row_chitiet['ten_danhmuc'] ?>
                </p>
                <p><input class="themgiohang" name="themgiohang" type="submit" value="Thêm giỏ hàng"> </p>
            </div>
        </form>

    </div>

    <?php
}
?>