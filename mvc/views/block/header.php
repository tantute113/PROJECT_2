<div class="menu">
            <label for="nav_input" class="icon_mobile"><img style="max-width:40px;" src="public/img/menu-button-of-three-horizontal-lines.png" alt=""></label>
            <h1>Hoa Yên</h1>
            <ul class="pc">
                <li class="trangchu"  ><a  href="Home">TRANG CHỦ</a></li>
                <li><a href="Product">SẢN PHẨM</a></li>
                <li><a href="Intro">CÂU CHUYỆN</a></li>
                <li><a href="Sale">ƯU ĐÃI</a></li>
                <li><a href="Contact">LIÊN HỆ</a></li>
            </ul>
         
            <div class="login-register">
              <?php  
              if(isset($_SESSION['user']))
              {
                echo "<a href='Login/Logout'>ĐĂNG XUẤT</a>";
              }else{
                     echo "   <a href='Login'>ĐĂNG NHẬP</a>";
                        echo "<a href='Signup'>ĐĂNG KÍ</a>";

              }
                        ?>
            </div>


            <input type="checkbox" hidden id="nav_input" class="nav_input">
            <label for="nav_input" class="over_lay">
            </label>
            <nav class="mobile_nav">
                <label for="nav_input" class="close">
                    <img style="width:15%;" src="public/img/close-button.png" alt="">
                </label>
                <ul class="mobile_ul">
                    <li><a href="index.php">TRANG CHỦ</a></li>
                    <li><a href="sanpham.php">SẢN PHẨM</a></li>
                    <li><a href="gthieu.php">CÂU CHUYỆN</a></li>
                    <li><a href="uudai.php">ƯU ĐÃI</a></li>
                    <li><a href="lienhe.php">LIÊN HỆ</a></li>
                   
                       <li><a href='Login'>ĐĂNG NHẬP</a></li>
                        <li><a href='Signup'>ĐĂNG KÍ</a></li> 
 
                  
                </ul>
            </nav>
        </div>
        <div style="clear:both"></div>