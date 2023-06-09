<div class="container-right-ad">
    <div class="timkiem-ad">
<form action="./Admin/index" method="POST">
<input type="text" name="timkiem"  value="<?php if(isset($_POST['timkiem'])){echo $_POST['timkiem'];}  ?>"> 
<input type="submit" value="Tìm kiếm" >
<div class="form-update-ad"><a href="./Admin/addproduct/">Thêm sản phẩm</a></div>
</form>

</div>
      <div class="table-ad">
    <table border="1">
 <thead>
  <tr>
  <th>STT</th>
  <th>Ảnh</th>
  <th>Tên</th>
  <th>Giá</th>

 <th>&nbsp;</th>
 <th>&nbsp;</th>
  </tr>
 </thead>
  <tbody>
  <?php 
  $stt=1;
     foreach($data['data'] as $return ) 
     { 
    ?>
  <tr>
   <td><?php echo $stt;$stt++; ?></td>
   <td><img style="max-width:50px;" src="./public/img/<?php echo $return['SP_ANH'];?>" alt=""></td>
  <td><?php echo $return['SP_TEN']; ?></td>
  <td><?php echo number_format( $return['SP_GIA'],'0',",","."); ?> VND</td>
  
  <td><a href="./Admin/editproduct/<?php echo $return['SP_MA']; ?>" class="sua" href=""><i style="color:white;" class="far fa-edit"></i></a></td>
   <td><a onclick="return del('<?php echo $return['SP_TEN']; ?>')" class="xoa" href="./Admin/deleteproduct/<?php echo $return['SP_MA']; ?>"><i style="color:white;" class="fas fa-trash-alt"></i></a></td> 
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
 
  <a href="./Admin/index/<?php echo $i;?>">
   <?php echo $i ;?>
  </a>
 
 <?php  }?>
 </div>
  </div>
  </div>