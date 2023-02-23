<?php 
include 'model/connect_to_db.php';
$sql_trang = mysqli_query($conn,"Select * from san_pham,danh_muc where san_pham.ma_dm = danh_muc.ma_dm ORDER BY san_pham.ma_sp ASC LIMIT $begin,10");
$row_count = mysqli_num_rows($sql_trang);
$san_pham = mysqli_query($conn,"Select * from san_pham");
$row_count_sp = mysqli_num_rows($san_pham);
$so_trang = ceil($row_count_sp/10);
?>