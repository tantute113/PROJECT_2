<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <base href="http://localhost/MVC_DOAN/">
  <link rel="stylesheet" href="./public/css/admincss/admincss.css">
  <link rel="stylesheet" href="./public/css/admincss/<?php echo $data['css'] ?>.css">
  <script src="https://kit.fontawesome.com/3cf6918e55.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script>
    function MyF() {
        document.getElementById("chatframe").style.display = "block";
    }

    function MyFun() {
        document.getElementById("chatframe").style.display = "none";

    }
</script>
</head>


<body>
  <div class="container">

    <div class="container-menu-ad">
      <div class="menu-ad">
        <div class="name-ad"> <span style="color:white;">
            <h3>Xin chào admin</h3>
          </span></div>
        <div class="logout-ad">


        </div>
      </div>

    </div>

    <div class="container-lc">
      <div class="left-ad">
        <ul>

          <li><a href="./Admin/index">Quản lí sản phẩm</a></li>
          <li><a href="./Admin/user">Quản lí Khách hàng</a></li>
          <li><a href="./Admin/news">Quản lí tin tức</a></li>
          <li><a href="./Admin/order">Quản lí hóa đơn</a></li>
          <li><a href="./Admin/detailorder">Chi tiết hóa đơn</a></li>
          <li><a href="./Admin/contact">Quản lí liên hệ</a></li>
          <li><a href="./Admin/phanquyen">Phân quyền</a></li>
          <li><a href="./Admin/category">Quản lí Danh mục</a></li>
          <li><a href="./Admin/couple">Quản lí mã giảm giá</a></li>
          <li><a href="./Admin/vnpay">Quản lí vnpay</a></li>

          <li><a href="./Admin/index">Trang chủ</a></li>
          <li><a onclick=" return dangxuat() " href="./Admin/Logout">Đăng xuất</a></li>
        </ul>

      </div>

    </div>


    <div class="content-ad">



      <?php require "./mvc/views/viewadmin/" . $data['page'] . ".php";   ?>



      <!-- table -->


    </div>
    <div class="chat_cus" style="margin-top: 200px; right:10px;  min-height: 350px; position: fixed; bottom: 75px;">
      <?php
      error_reporting(0);
      if (isset($_POST['tin_nhan']) && !empty($_POST['tin_nhan'])) {
        $mes = $_POST['tin_nhan'];
        $f = fopen("chat.txt", "a");
        fwrite($f, "ad-" . $mes . "\n");
        fclose($f);
      }
      ?>
      <div id="chatframe" style="display: none; left:-387px; bottom:-20px;">
        <div class="off">
          <a onclick="MyFun()">
            <div class="shape">
              <span>&#215;</span>
            </div>
          </a>
        </div>
        <div class="wrap">
          <div class="mess">
            <?php
            $f = fopen("chat.txt", "r") or die("Không mở đc file");
            while (!feof($f)) {
              $nd = fgets($f);
              $mang = explode("-", $nd);
              if ($mang[0] == "cus") {
            ?>

                <div id="cus">
                  <?php
                  echo $mang[1];
                  ?>
                </div>
              <?php
              } else if ($mang[0] == "ad") {
              ?>
                <div id="ad">
                  <?php
                  echo $mang[1]; ?>
                </div>
            <?php
              }
            }
            ?>
          </div>
        </div>
        <!-- phân tách biệt giữa form nhập và form xuất -->
        <form id="chatbox" method="POST" class="frameinput">
          <table>
            <input type="hidden" name="may" value="ad">
              <input type="text" name="tin_nhan" id="tin_nhan" placeholder="Nhập vào đây..." class="inmakeup" autocomplete="off" autofocus>
             <input type="submit" name="submit" value="Gửi" class="btnmakeup">
          </table>
        </form>
        <script>
          $(function() {
            $("#chatbox").submit(function() {
              $.ajax({
                type: "POST",
                url: "data.php",
                data: {
                  tin_nhan: $("#tin_nhan").val(),
                  may_chat: 'ad'
                },
                success: function(data) {
                  $(".mess").html(data);
                  $("#tin_nhan").val("");

                  $(".mess").scrollTop($(".mess")[0].scrollHeight);
                }
              });
              e.preventDefault();
            })
            //load lại
            setInterval(function() {
              $(".wrap").load("index.php .mess", function() {
                $(".mess").scrollTop($(".mess")[0].scrollHeight);
              });
            }, 1000);
          })
        </script>
      </div>
      <button type="button" onclick="MyF()" class="opa">Chat now!</button>
    </div>
  </div>
  <script src="./index.js"></script>
</body>

</html>