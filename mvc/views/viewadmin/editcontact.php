
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Document</title>

  <style type="text/css">
   
  </style>
</head>

<body>
  <?php
  if (isset($_POST['submit'])) {
    if (isset($_POST['idlh']) && !empty($_POST['idlh']) && isset($_POST['facebook']) && !empty($_POST['facebook']) && isset($_POST['sodienthoai']) && !empty($_POST['sodienthoai']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['diachi']) && !empty($_POST['diachi']) && isset($_POST['dieukhoan']) && !empty($_POST['dieukhoan'])&& isset($_POST['bando']) && !empty($_POST['bando'])) {
      $idlh = $_POST['idlh'];
      $facebook = $_POST['facebook'];
      $sodienthoai = $_POST['sodienthoai'];
      $email = $_POST['email'];
      $diachi = $_POST['diachi'];
      $dieukhoan = $_POST['dieukhoan'];
      $bando = $_POST['bando'];
      $kkk = update_lienhe($diachi, $sodienthoai, $email, $facebook, $dieukhoan, $idlh,$bando,$conn);
      header("Location:index-ad.php?action=lienhe");
    } else {
      echo '<script language="javascript">';
      echo 'alert("bạn chưa nhập đủ thông tin !")';
      echo '</script>';
    }
  }
  ?>



  <?php

  if (isset($_GET['idlh'])) {
    $idlh = $_GET['idlh'];
    $kp = laylienheid($idlh, $conn);
    $rt = mysqli_fetch_array($kp);
  } else {
   
  }


  ?>
  <div class="container-ad">
    <div class="edit-ad">
    
      <form action="" method="POST">
        <div class="input-ad">
          <div class="label-ad">
            <input type="hidden" name="idlh" value=>
            <label>Facebook</label>
          </div>
          <input type="text" name="facebook" value=>

        </div>
        <div class="input-ad">
          <div class="label-ad">
            <label>số điện thoại</label>
          </div>
          <input type="text" name="sodienthoai" value=>

        </div>

        <div class="input-ad">
          <div class="label-ad">
            <label>Email</label>
          </div>
          <input type="text" name="email" value=>
        </div>


        <div class="input-ad">
          <div class="label-ad">
            <label>Địa chỉ</label>
          </div>
          <textarea name="diachi" id="product-content" cols="100" rows="40"></textarea>
          <div class="label-ad">
            <label>Điều khoản</label>
          </div>
          <textarea name="dieukhoan" id="product-content" cols="100" rows="40"></textarea>
          <div class="label-ad">
            <label>Bản đồ</label>
          </div>
          <textarea name="bando" id="product-content" cols="100" rows="40"></textarea>
        </div>
        <div class="input-ad">
          <input type="submit" name="submit" value="Cập nhật">
        </div>
      </form>
    </div>


  </div>
  
</body>

</html>