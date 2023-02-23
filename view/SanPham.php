<?php include 'controller/pageIndex.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Sản Phẩm</title>
 <style>
 /** @format */

 table,
 th,
 td {
  border: 1px solid black;
 }

 td,
 tr {
  padding: 8px;
 }
 </style>
</head>

<body>
 <br></br>
 <!-- Another variation with a button -->
 <div class="input-group">
  <input type="text" class="form-control" placeholder="Nhập tên sản phẩm">
  <div class="input-group-append">
   <button class="btn btn-secondary" type="button">
    <i class="fa fa-search"></i>
   </button>
  </div>
 </div>
 <br></br>
 <div style="text-align:right">
  <a><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#popup"><i class="fa fa-plus-circle"
     aria-hidden="true"></i></button></a>
 </div>
 <br></br>
 <?php 
 include 'model/getCategoryOfProduct.php';
 include 'model/countRowProduct.php';
?>
 <div style="justify-content:center; display:flex">
  <div>
   <table style="text-align:center">
    <tbody>
     <tr>
      <td style="width:80px"><b>#</b></td>
      <td style="width:170px"><b>Product name</b></td>
      <td style="width:210px"><b>Category</b></td>
      <td style="width:217px"><b>Image</b></td>
      <td style="width:200px"><b>Operations</b></td>
     <tr>
      <?php 
    $i=1;
    while($row=mysqli_fetch_assoc($sql_trang)):?>
     <tr>
      <td><?=$row['ma_sp']?></td>
      <td><?=$row['ten_sp']?></td>
      <td><?=$row['ten_dm']?></td>
      <td><img src="<?=$row['hinhanh_sp']?>" style="width:200px;height:200px" title="<?=$row['ten_sp']?>"></td>
      <td>
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#popup2"><i
         class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
       <button type="button" class="btn btn-primary" onclick="confirmDelete()" data-toggle="modal"
        data-target="#popup3"><i class="fa fa-minus-circle" aria-hidden="true"></i></button>
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#popup4"><i
         class="fa fa-sticky-note-o" aria-hidden="true"></i></button>
       <button type="button" class="btn btn-primary" id="<?=$row['hinhanh_sp']?>" data-toggle="modal"
        data-target="#popup5"><i class="fa fa-eye" aria-hidden="true"></i></button>
      </td>
      </td>
     </tr>
     <?php $i++; endwhile;?>
    </tbody>
   </table>
  </div>
 </div>
 <!-- Pop-up -->
 <div id="popup" class="modal">
  <form action="">
   <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
     <div class="modal-header">
      <p> Add new product </p>
     </div>
     <div class=" modal-body">
      <p> Product name </p>
      <p><input type="text" id="add-product-name" class="form-control"></p>
      <p><sup>We'll never share your email with anyone else</sup></p>
      <p> Category </p>
      <?php 
        include 'model/getAllCategory.php';
     ?>
      <p>
       <select id="company" class="form-control">
        <?php 
         $i=1;
         while($row=mysqli_fetch_assoc($rs2)):
         ?>
        <option><?=$row['ten_dm']?></option>
        <?php $i++; endwhile;?>
       </select>
      </p>
      <p>Product Image</p>
      <p><input type="file" id="fileUpload" /></p>
      <button type="button" class="btn btn-primary">Submit</button>
     </div>
     <div class=" modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">X
      </button>
     </div>
    </div>
   </div>
  </form>
 </div>
 <!-- Pop-up2 -->
 <div id="popup2" class="modal">
  <form action="">
   <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
     <div class="modal-header">
      <p> Edit this product </p>
     </div>
     <div class=" modal-body">
      <p> Product ID </p>
      <p><input type="text" id="add-product-name" class="form-control"></p>
      <p> Product name </p>
      <p><input type="text" id="add-product-name" class="form-control"></p>
      <p><sup>We'll never share your email with anyone else</sup></p>
      <p> Category </p>
      <?php 
        include 'model/getAllCategory.php';
     ?>
      <p>
       <select id="company" class="form-control">
        <?php 
         $i=1;
         while($row=mysqli_fetch_assoc($rs2)):
         ?>
        <option><?=$row['ten_dm']?></option>
        <?php $i++; endwhile;?>
       </select>
      </p>
      <p>Product Image</p>
      <p><input type="file" id="fileUpload" /></p>
      <button type="button" class="btn btn-primary">Submit</button>
     </div>
     <div class=" modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">X
      </button>
     </div>
    </div>
   </div>
  </form>
 </div>
 <!-- Popup5 -->
 <div id="popup5" class="modal">
  <div class="modal-dialog">
   <div class="modal-content">
    <div class="modal-body">
     <image src="<?=$row['hinhanh_sp']?>" class="img-responsive" style="width:450px">
    </div>
    <div class=" modal-footer">
     <button type="button" class="btn btn-secondary" data-dismiss="modal">X
     </button>
    </div>
   </div>
  </div>
 </div>
 <div>
  <?php 
    include "view/PageIndex.php";
    ?>
 </div>
</body>
<script>
function confirmDelete() {
 confirm("Delete this Product!");
};
</script>

</html>