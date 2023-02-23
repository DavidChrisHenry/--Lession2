<?php include 'model/countRowProduct.php' ?>
<ul class="pagination">
 <li class="page-item"><a class="page-link">Page:</a></li>
 <?php 
    for($i=0;$i<$so_trang;$i++){
    ?>
 <nav aria-label="Page navigation example">
  <li class="page-item"><a <?php if($i==$page){echo 'style="color: #fff; background-color:aqua"';
}else{ echo '';} ?> class="page-link" href="index.php?page=<?php echo $i+1?>"><?php echo $i+1?></a>
  </li>
 </nav>
 <?php }?>
</ul>