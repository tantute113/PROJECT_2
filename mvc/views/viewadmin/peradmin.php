<div class="container-right-ad">
    <div class="timkiem-ad">
<form action="" method="POST">
<input type="text" name="timkiem" value="<?php if(isset($_POST['timkiem'])){echo $_POST['timkiem'];}  ?>"> 
<input type="hidden" name="action" value="phanquyen">
<input type="submit" value="Tìm kiếm">
</form>
</div>
      <div class="table-ad">
    <table border="1">
 <thead>
  <tr>
  <th>STT</th>
  <th>Tên tài khoản</th>
  <th>Mật khẩu</th>
  <th>Loại quyền</th>
 <th>&nbsp;</th>
 
  </tr>

 </thead>
  <tbody>

 

    <?php $stt=1; foreach($data['data'] as $att){ ?>
  <tr>
   <td><?php echo $stt;$stt++; ?></td>
   <td><?php echo $att['TK_TEN'];?></td>
  <td><?php echo $att['TK_MATKHAU'];  ?></td>
  <td><?php echo $att['LOAI_TEN'] ?></td>
  <?php if($att['TK_TEN']=='admin') {echo '<td></td>';}else{  ?>
  <td><a class="sua" href="./Admin/statusper/<?php echo $att['TK_TEN']; ?>/<?php echo $att['LOAI_MA']; ?>"><i style="color:white;" class="far fa-edit"></i></a></td>
  <?php } ?>
  </tr>
<?php }?>
  
  </tbody>
  
   </table>
   <div class="phantrang">
    <span style="color:white;" >Trang</span>
   <?php   for($i=1 ;$i<=$data['numpage'] ;$i++)
       { 
   ?>
 
 <a href="./Admin/phanquyen/<?php echo $i;?>">
   <?php echo $i ;?>
  </a>
 
 <?php  }?>
 </div>
  </div>
  </div>
  <!-- table -->
 

    </div>
