<?php
include("../../config/config.php");

$tensanpham = $_POST['tensanpham'];
$masp = $_POST['masp'];
$giasp = $_POST['giasp'];
$soluong = $_POST['soluong'];

//xu ly hinh anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time() . '_' . $hinhanh;

$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$danhmuc = $_POST['danhmuc'];



if (isset($_POST['thephmsanam'])) {
    //them
    $sql_them = "INSERT INTO sanpham(tensanpham,masp,giasp,soluong,hinhanh,tomtat,noidung,tinhtrang,id_danhmuc)
     VALUE('" . $tensanpham . "', '" . $masp . "','" . $giasp . "','" . $soluong . "','" . $hinhanh . "',
     '" . $tomtat . "','" . $noidung . "','" . $tinhtrang . "','" . $danhmuc . "')";
    mysqli_query($mysqli, $sql_them);
    move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
    header('Location:../../index.php?action=quanlisanpham&query=them');
} elseif (isset($_POST['suasanpham'])) {
    //sua
    if ($hinhdanh != '') {
        move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
        $sql_update = "UPDATE sanpham SET tensanpham='" . $tensanpham . "', masp='" . $masp . "',
    giasp='" . $giasp . "', soluong='" . $soluong . "', hinhanh='" . $hinhanh . "', tomtat='" . $tomtat . "',
    noidung='" . $noidung . "', tinhtrang='" . $tinhtrang . "',id_danhmuc='" . $danhmuc . "' WHERE id_sanpham='$_GET[idsanpham]'";

    } else {
        $sql_update = "UPDATE sanpham SET tensanpham='" . $tensanpham . "', masp='" . $masp . "',
    giasp='" . $giasp . "', soluong='" . $soluong . "', tomtat='" . $tomtat . "',
    noidung='" . $noidung . "', tinhtrang='" . $tinhtrang . "',id_danhmuc='" . $danhmuc . "' WHERE id_sanpham='$_GET[idsanpham]'";
    }
    mysqli_query($mysqli, $sql_update);
    header('Location:../../index.php?action=quanlisanpham&query=them');

}

?>


<!-- <?php
include("../../config/config.php");

$tensanpham = $_POST['tensanpham'];
$masp = $_POST['masp'];
$giasp = $_POST['giasp'];
$soluong = $_POST['soluong'];

//xử lý hình ảnh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time() . '_' . $hinhanh;

$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$id_danhmuc = $_POST['id_danhmuc'];

if (isset($_POST['themsanpham'])) {
    // Thêm sản phẩm
    $sql_them = "INSERT INTO sanpham(tensanpham, masp, giasp, soluong, hinhanh, tomtat, noidung, tinhtrang,id_danhmuc)
     VALUES ('$tensanpham', '$masp', '$giasp', '$soluong', '$hinhanh', '$tomtat', '$noidung', '$tinhtrang','$id_danhmuc')";
    mysqli_query($mysqli, $sql_them);
    
    // Di chuyển hình ảnh tải lên vào thư mục uploads/
    move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
    
    header('Location:../../index.php?action=quanlisanpham&query=them');
} elseif (isset($_POST['suasanpham'])) {
    // Sửa sản phẩm
    if ($_FILES['hinhanh']['size'] > 0) {
        // Nếu có tệp hình ảnh mới được chọn, di chuyển nó và cập nhật trong cơ sở dữ liệu
        move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
        $sql_update = "UPDATE sanpham SET tensanpham='$tensanpham', masp='$masp', giasp='$giasp', soluong='$soluong', hinhanh='$hinhanh', tomtat='$tomtat', noidung='$noidung', tinhtrang='$tinhtrang' WHERE id_sanpham='$_GET[idsanpham]'";
    } else {
        // Không có hình ảnh mới, chỉ cập nhật thông tin khác
        $sql_update = "UPDATE sanpham SET tensanpham='$tensanpham', masp='$masp', giasp='$giasp', soluong='$soluong', tomtat='$tomtat', noidung='$noidung', tinhtrang='$tinhtrang' WHERE id_sanpham='$_GET[idsanpham]'";
    }
    
    mysqli_query($mysqli, $sql_update);
    header('Location:../../index.php?action=quanlisanpham&query=them');
}

?> -->
