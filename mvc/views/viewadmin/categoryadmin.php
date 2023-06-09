<div class="container-right-ad">
    <div class="timkiem-ad">
<form action="" method="POST">


<input type="hidden" name="action" value="hoadon">

</form>
</div>
      <div class="table-ad"> 
    <table border="1">
 <thead>
  <tr>
  <th>STT</th>
  <th>Tên danh mục</th>
  <th>Mô tả</th>
 <th>&nbsp;</th>

 
 <?php 
 $stt=1;
   while($ktt=mysqli_fetch_array($data['data']))
   {
 ?>
  </tr>

 </thead>
  <tbody>
  <tr>
   <td><?php echo $stt; $stt++;  ?></td>
  
  <td><?php echo $ktt['DM_TEN']; ?></td>
  <td><?php echo $ktt['DM_MOTA']?></td>
  <td><a class="sua" href="./Admin/editcategory/<?php echo $ktt['DM_MA']; ?>"><i style="color:white;" class="far fa-edit"></i></a></td>
  </tr>
  <?php }?>

  </tbody>
  
   </table>
  
  </div>
  </div>
  <!-- table -->
 

    </div>
