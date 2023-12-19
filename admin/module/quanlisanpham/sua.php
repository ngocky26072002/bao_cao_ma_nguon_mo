<?php
    $sql_sua_sanpham = "SELECT * FROM sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
    $query_sua_sanpham = mysqli_query($mysqli, $sql_sua_sanpham);
?>
<?php
while($row=mysqli_fetch_array($query_sua_sanpham)){
?>
<p>Sửa sản phẩm</p>
<form method="POST" action="module/quanlisanpham/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>" enctype="multipart/form-data">
    <table border="1" width="50%" style="border-collapse: collapse;">
        <tr>
            <td>Tên sản phẩm</td>
            <td><input type="text" value="<?php echo $row['tensanpham']?>" name="tensanpham"></td>
        </tr>
        <tr>
            <td>Mã sản phẩm</td>
            <td><input type="text" value="<?php echo $row['masp']?>" name="masp"></td>
        </tr>
        <tr>
            <td>Giá</td>
            <td><input type="text" value="<?php echo $row['giasp']?>" name="giasp"></td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td><input type="text" value="<?php echo $row['soluong']?>" name="soluong"></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td>
                <input type="file" name="hinhanh">
                <td><img src="module/quanlisanpham/uploads/<?php echo $row['hinhanh'] ?>" alt="Hình ảnh sản phẩm" width="150px"></td>
            </td>
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea rows="10" name="noidung" style="resize: none"><?php echo $row['noidung']?></textarea></td>
        </tr> 
        <tr> 
            <td>Tóm tắt</td> 
            <td><textarea rows="10" name="tomtat" style="resize: none"><?php echo $row['tomtat']?></textarea></td>
        </tr>
        <tr>
            <td>Danh mục</td>
            <td>
                <select name="danhmuc">
                    <?php
                    $sql_danhmuc="SELECT * FROM danhmuc ORDER BY id DESC";
                    $query_danhmuc=mysqli_query($mysqli,$sql_danhmuc);
                    while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
                    ?>
                    <option value="<?php echo $row_danhmuc['id']?>"><?php echo $row_danhmuc['ten_danhmuc']?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tình trạng</td>
            <td>
                <select name="tinhtrang">
                    <?php
                    if($row['tinhtrang'] == '1'){
                        ?>
                    <option value="1" selected>Kích hoạt</option>
                    <option value="0">Ẩn</option>
                    <?php
                    }else{
                    ?>
                    <option value="1" >Kích hoạt</option>
                    <option value="0" selected>Ẩn</option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
        </tr>
    </table>
</form>
<?php
}
?>