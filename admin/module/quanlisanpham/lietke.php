<?php
$sql_lietke_sanpham = "SELECT * FROM  sanpham,danhmuc WHERE sanpham.id_danhmuc=danhmuc.id ORDER BY id_sanpham DESC";
$query_lietke_sanpham = mysqli_query($mysqli, $sql_lietke_sanpham);
?>
<p>Liệt kê sản phẩm</p>
<table  border="1" width="100%" style="border-collapse: collapse;">
    <tr>
        <th>Id</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Danh mục</th>
        <th>Mã sản phẩm</th>
        <th>Tóm tắt</th>
        <th>Nội dung</th>
        <th>Trạng thái</th>
        <th>Quản lí</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_sanpham)) {
        $i++;
    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['tensanpham'] ?></td>

            <td><img src="module/quanlisanpham/uploads/<?php echo $row['hinhanh'] ?>" alt="Hình ảnh sản phẩm" width="150px"></td>
            <td><?php echo $row['giasp'] ?></td>
            <td><?php echo $row['soluong'] ?></td>
            <td><?php echo $row['ten_danhmuc'] ?></td>
            <td><?php echo $row['masp'] ?></td>
            <td><?php echo $row['tomtat'] ?></td>
            <td><?php echo $row['noidung'] ?></td>
            <td><?php if($row['tinhtrang']==1){
                echo 'Kích hoạt';
            }else{
                echo 'Ẩn';
            }  ?></td>

            <td>
                <!-- <a href="module/quanlisanpham/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a> | <a href="
                ?action=quanlisanpham&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a> -->
                <a href="module/quanlisanpham/xoa.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a> | <a href="
                ?action=quanlisanpham&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
                
            </td>

        </tr>
        <?php
    }
    ?>

</table>