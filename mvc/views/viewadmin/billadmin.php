
    <div class="container-right-ad">
    <div class="timkiem-ad">
<form action="" method="POST">
<input type="text" name="timkiem" value="<?php if(isset($_GET['timkiem'])){echo $_GET['timkiem'];}  ?>"> 
<input type="submit" value="Tìm kiếm">
<input type="hidden" name="action" value="hoadon">
</form>
</div>
      <div class="table-ad">
    <table border="1">
 <thead>
  <tr>
  <th>STT</th>
  <th>Số hóa đơn</th>
  <th>Tên khách hàng</th>
  <th>Mã giảm giá</th>
  <th>Tổng tiền</th>
  <th>Ghi chú</th>
  <th>Trạng thái</th>
 <th>Duyệt</th>
 <th>&nbsp;</th>

 <?php 
  
  
  
    ?>

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
  <td><?php echo $ktt['KH_TEN']; ?></td>
  <td><?php echo $ktt['GG_MA']; ?></td>
 
  <td><span><?php echo number_format( $ktt['HD_THANHTIEN'],'0',",","."); ?> VND</span></td>
  <td><?php echo $ktt['HD_GHICHU']; ?></td>
  <td><span><?php echo $ktt['TT_TEN'];  ?></span></td>
  <td><a onclick="return del('<?php echo 'duyệt đơn hàng'; ?>')" class="duyet" href="./Admin/statusorder/<?php echo $ktt['HD_MA'];?>/<?php echo$ktt['TT_MA'] ;?>"><i <?php if($ktt['TT_MA']==0){echo "style='color: rgb(0,169,158);'";}else{echo "style='background: rgb(0,169,158);color: white;border-radius: 50%; padding: 1px;'";} ?> class="far fa-check-circle"></i></a></td>
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
 
 <a href="./Admin/bill/<?php echo $i;?>">
   <?php echo $i ;?>
  </a>
 
 <?php  }?>
 </div>
  </div>
  </div>
  <!-- table -->

    </div>
