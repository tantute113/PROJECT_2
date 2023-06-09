
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
  <th>Tổng thanh toán</th>
  <th>Ngân hàng</th>
  <th>Mã ngân hàng</th>
  <th>Loại thẻ</th>
  <th>Nội dung thanh toán</th>
  <th>Ngày xuất</th>
 <th>Mã hóa đơn</th>
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
  <td><?php echo $ktt['vnp_amount']; ?></td>
  <td><?php echo $ktt['vnp_bankcode']; ?></td>
  <td><?php echo $ktt['vnp_banktranno']; ?></td>
 
  <td><?php echo $ktt['vnp_cardtype']; ?></td>
  <td><?php echo $ktt['vnp_orderInfo']; ?></td>
  <td><?php $time = strtotime($ktt['vnp_paydate']);
echo date("Y-m-d h:i:s",$time)."<br>";?></td>
 
  <td><?php echo $ktt['HD_MA']; ?></td>
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
