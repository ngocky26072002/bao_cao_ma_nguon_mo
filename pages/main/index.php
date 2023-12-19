<?php
$sql_prod = "SELECT * FROM danhmuc,sanpham WHERE sanpham.id_danhmuc=danhmuc.id 
 ORDER BY sanpham.id_sanpham DESC LIMIT 10";
$query_prod = mysqli_query($mysqli, $sql_prod);
?>
<h3>Sản phẩm mới nhất</h3>
<ul class="product_list">
    <?php
    while ($row = mysqli_fetch_array($query_prod)) {
        ?>
        <li>
            <a href="index.php?quanli=sanpham&id=<?php echo $row['id_sanpham']?>">
                <img src="admincp/module/quanlisanpham/uploads/<?php echo $row['hinhanh'] ?>" alt="">
                <p class="title_product">Tên sản phẩm: <?php echo $row['tensanpham'] ?>
                </p>
                <p class="price_product">Giá: <?php echo $row['giasp'] ?> vnđ
                </p>
                <p style="text-align: center;color:#d1d1d1"><?php echo $row['ten_danhmuc'] ?></p>

            </a>
        </li>
        <?php
    }
    ?>




</ul>