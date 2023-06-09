<div class="container-right-ad">
    <div class="timkiem-ad">
<form action="" method="POST">
<input type="text" name="timkiem" value="<?php if(isset($_GET['timkiem'])){echo $_GET['timkiem'];}  ?>"> 
<input type="submit" value="Tìm kiếm">
<input type="hidden" name="action" value="cthd">
</form>
</div>
      <div class="table-ad">
    
      
    <table border="1">
 <thead>


  <tr>
  <th>STT</th>
  <th>Số hóa đơn</th>
  <th>Tên sản phẩm</th>
  <th>Tổng tiền</th>
  <th>Số lượng</th>
 <th>&nbsp;</th>
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
  
  <td><?php echo $ktt['HD_MA']; ?></td>
  <td><?php echo $ktt['SP_TEN']; ?></td>
 
  <td><span><?php echo number_format( $ktt['CTHD_DONGIA'],'0',",","."); ?> VND</span></td>
  <td><span><?php echo $ktt['CTHD_SOLG'];  ?></span></td>
  <td>&nbsp;</td>
  </tr>
  <?php }?>

  </tbody>
  
   </table>
   <div class="phantrang">
   <span style="color: white;">Trang</span>
   <?php   for($i=1 ;$i<=$data['numpage'] ;$i++)
       { 
   ?>
 
 <a href="./Admin/detailorder/<?php echo $i;?>">
   <?php echo $i ;?>
  </a>
 
 <?php  }?>
 </div>
  </div>
  </div>
  <!-- table -->
 

    </div>
