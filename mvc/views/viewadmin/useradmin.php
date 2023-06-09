<div class="container-right-ad">
    <div class="timkiem-ad">
<form action="" method="POST">
<input type="text" name="timkiem" value="<?php if(isset($_GET['timkiem'])){echo $_GET['timkiem'];}  ?>"> 
<input type="submit" value="Tìm kiếm">
<input type="hidden" name="action" value="khachhang">
</form>
</div>
      <div class="table-ad">
    
      
    <table border="1">
 <thead>


  <tr>
  <th>STT</th>
  <th>Tên</th>
  <th>Số điện thoại</th>
  <th>Ngày sinh</th>
 
 <th>&nbsp;</th>
 
  </tr>

 </thead>
  <tbody>
  




    <?php  $stt=1;
     foreach($data['data'] as $rt ) 
         {
           
          ?>
  <tr>
   <td><?php echo $stt;$stt++; ?></td>
   <td><?php echo $rt['KH_TEN'] ; ?></td>
  <td><?php echo $rt['KH_SDT'] ; ?></td>
  <td><?php echo $rt['KH_DCHI'] ; ?></td>
 
  <td>&nbsp;</td>
  </tr>
<?php }?>
   

  </tbody>
  
   </table>
   <div class="phantrang">
     <span style="color: white;">Trang</span>
     <?php  $sotrang=$data['numpage'];
      for($i=1 ;$i<=$sotrang ;$i++)
       { 
   ?>
 
 <a href="./Admin/user/<?php echo $i;?>">
   <?php echo $i ;?>
  </a>
 
 <?php  }?>
 </div>
  </div>
  </div>
  <!-- table -->
 

    
