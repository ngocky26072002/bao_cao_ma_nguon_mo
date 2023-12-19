<?php
include("../../config/config.php");
$id = $_GET['idsanpham'];
// $sql="SELECT * FROM sanpham WHERE id_sanpham='$id' LIMIT 1";
// $query=mysqli_query($mysqli, $sql);
// while( $row = mysqli_fetch_array($query)) {
//     unlink('uploads/'.$row['hinhanh']);
// }
$sql_xoa = "DELETE FROM sanpham WHERE id_sanpham='" . $id . "' ";
mysqli_query($mysqli, $sql_xoa);
header('Location:../../index.php?action=quanlisanpham&query=them');
?>