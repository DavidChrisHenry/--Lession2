<?php
include "model/getAllCategory.php" ;
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <table style="text-align:center">
  <tbody>
   <tr>
    <td><b>Mã DM</b></td>
    <td><b>Tên DM</b></td>
   <tr>
    <?php 
    $i=1;
    while($row=mysqli_fetch_assoc($rs2)):?>
   <tr>
    <td><?=$row['ma_dm']?></td>
    <td><?=$row['ten_dm']?></td>
    </td>
   </tr>
   <?php $i++; endwhile;?>
  </tbody>
 </table>
</body>

</html>