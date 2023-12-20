<!-- <?php
$sql_prod = "SELECT * FROM danhmuc,sanpham WHERE sanpham.id_danhmuc=danhmuc.id AND sanpham.id_danhmuc='$_GET[id]'
ORDER BY sanpham.id_sanpham DESC";
$query_prod = mysqli_query($mysqli, $sql_prod);
$row_title = mysqli_fetch_array($query_prod);
?>
<h3>Danh mục sản phẩm: <?php echo $row_title['ten_danhmuc'] ?></h3>
<ul class="product_list">
   <?php
   while ($row_prod = mysqli_fetch_assoc($query_prod)) {
       ?>
       <li>
           <a href="">
               <img src="images\msi1.jpg" alt="">
               <p class="title_product">Tên sản phẩm: MSI 17.3" GL75 Gaming Laptop </p>
               <p class="price_product">Giá: 17.990.000đ</p>
           </a>
       </li>
       <?php
   }
   ?>


</ul> -->

<?php
$sql_prod = "SELECT * FROM danhmuc, sanpham WHERE sanpham.id_danhmuc = danhmuc.id AND sanpham.id_danhmuc = '$_GET[id]' ORDER BY sanpham.id_sanpham DESC";
$query_prod = mysqli_query($mysqli, $sql_prod);

// Kiểm tra xem có dữ liệu trong $row_title hay không
if ($row_title = mysqli_fetch_array($query_prod)) {
   ?>
   <h3>Danh mục sản phẩm:
       <?php echo $row_title['ten_danhmuc'] ?>
   </h3>
   <ul class="product_list">
       <?php
       // Đặt con trỏ về đầu kết quả để lặp lại
       mysqli_data_seek($query_prod, 0);

       while ($row_prod = mysqli_fetch_assoc($query_prod)) {
           ?>
           <li>
               <a href="index.php?quanli=sanpham&id=<?php echo $row_prod['id_sanpham']?>">
                   <img src="admin/module/quanlisanpham/uploads/<?php echo $row_prod['hinhanh']; ?>" alt="">
                   <p class="title_product">Tên sản phẩm:
                       <?php echo $row_prod['tensanpham'] ?>
                   </p>
                   <p class="price_product">Giá : <?php echo $row_prod['giasp']?> vnđ
                   </p>

               </a>
           </li>
           <?php
       }
       ?>
   </ul>
   <?php
} else {
   echo "Không có dữ liệu cho danh mục này";
}
?>