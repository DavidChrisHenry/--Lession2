<?php
include 'model/connect_to_db.php';
$sql = "select * from san_pham,danh_muc where san_pham.ma_dm = danh_muc.ma_dm ";
$rs = mysqli_query($conn,$sql);
?>