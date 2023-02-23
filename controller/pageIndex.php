<?php
if(isset($_GET['page'])){
$page = $_GET['page'];
}else{
$page = '';
}
if($page == '' || $page == 1){
$begin = 0;
}else{
$begin = $page;
}
?>