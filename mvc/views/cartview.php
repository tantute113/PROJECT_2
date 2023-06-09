<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <base href="http://localhost/MVC_DOAN/" >
    <link rel="stylesheet" href="public/css/<?php echo $data['css'] ;?>.css">
    <script src="https://kit.fontawesome.com/3cf6918e55.js" crossorigin="anonymous"></script>
  
</head>
<body>


<div class="container">
      <div class="menu"><h1>Giỏ hàng </h1> <a href="./Product/index"><img style="width:50px;height:50px;" src="./public/img/shopping-cart.png" alt=""></a></div>
      <div style="clear: both;"></div>
      <div class="content">
      <form action="./Cart/index" method="POST">
  <div class="table">
 
   <table border="1">
 <thead>


  <tr>
  <th>STT </th>
  <th>Ảnh</th>
  <th>Tên</th>
  <th>Giá</th>
 <th>Số lượng</th>
 <th>&nbsp;</th>
  </tr>

 </thead>
  <tbody>
  
<?php 
   $stt=1;
   $total=0 ;
   foreach($data['sp'] as $id=>$rt)
   {  
    ?>
  <tr>
   <td><?php echo $stt;$stt++; ?></td>
   <td><img  src="./public/img/<?php echo $rt['SP_ANH'];  ?>" alt=""></td>
  <td><?php echo $rt['SP_TEN']; ?> </td>
  <td><?php echo number_format($rt['SP_GIA']);  ?> VND</td>
  <td><a href="./Cart/reduce/<?php echo $id; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z"/>
</svg></a><input type="text" disabled value="<?php echo $rt['quantity'];  ?>" name="quantity[<?php echo $rt['SP_MA']; ?>]"><a href="./Cart/rise/<?php echo $id; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
</svg></a></td>
  <td><a href="./Cart/delete/<?php echo $rt['SP_MA']; ?>"><i class="far fa-trash-alt"></i></a></td>
  </tr>
 
<?php
     $total+=$rt['SP_GIA']*$rt['quantity'];  }?>
  </tbody>
  
   </table>
  

 
  </div>
  <!-- table -->
 
<div class="total">
    <div class="coupon">
     
         <input type="text" name="giamgia" placeholder="nhập mã giảm giá tại đây" value="<?php if(isset($_POST['giamgia'])){echo $_POST['giamgia'];}else{echo ""; unset($_SESSION['giamgia']);} ?>">
         <input type="submit" value="Áp dụng" name="couple">
      
    </div>  
    <div class="total1">
  
<div class="mini-total"> <p>Tổng tiền hàng:</p> <span><?php echo number_format($total,'0',",","."); ?> VND</span></div>
<?php if(isset($data['mgg'])){
    
    $rrrr=$data['mgg'];
    $total=$total*(100-$data['mgg'])/100;
    
    echo "<div class='mini-total'> <p>Giảm giá:</p> <span>$rrrr%</span></div>";
    }else{  echo "<div class='mini-total'> <p>Không có mã giảm giá</p> </div>";} ?>


<div class="mini-total" id="thanhtoan"> <p >Tổng thanh toán:</p> <span><?php  echo number_format($total,'0',",","."); ?> VND</span></div>  


<input type="hidden" name="tong" value="<?php echo $total ; ?>">
    </div> 
<div style="clear:both;"></div>
<?php if(isset($_SESSION['user'])){ 
 $keyt=mysqli_fetch_array($data['kh']) ;

  } ?>
    <div class="total2">
      
        <div class="total3">
            
        <div class="label"><label for="name">Người nhận :</label><input type="text" name="hoten" id="name" value="<?php if(isset($_SESSION['user'])){echo $keyt['TK_TEN'];} ?>"></div>
       
        
        </div>
       <div class="total3">
           <div class="label"> <label for="tel">Số điện thoại:</label><input type="text" placeholder="Nhập đủ 10 chữ số" name="sodienthoai" id="tel" pattern="(0)\d{9}" value="<?php if(isset($_SESSION['user'])){echo $keyt['TK_SDT'];} ?>"></div>
       
        
        </div>

        <div class="total3">
            <div class="label"> <label for="address" >Địa chỉ:</label><input type="text" name="diachi" id="address"  value="<?php if(isset($_SESSION['user'])){echo $keyt['TK_DIAC'];} ?>"></div>
        </div>

        <div class="total3">
            <div class="label"> <label for="note">Ghi chú:</label>
   <textarea name="ghichu" id="note" cols="50" rows="7"> </textarea>
        </div>
    </div>
    <div class="dathang">  <label for="select">Chọn phương thức :</label>
                    <select name="thanhtoan" id="select" class="form-control">
                        <option value="0">Trả tiền khi nhận hàng</option>
                        <option value="1">Thanh toán trực tuyến</option>
                    </select>  <input type="submit" name="order" value="Đặt hàng"> </div>
   
</div>
      </div>     
        </form>
</div>
</body>
</html>