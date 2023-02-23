<?php 
if(isset($_GET['act'])&&($_GET['act']))
 switch ($_GET['act']){
  case 'category':
   include 'view/category.php';
  break;
  case 'san-pham':
   include 'controller/pageIndex.php';
   include 'view/SanPham.php';
  break;
}