
  <?php
  $error = "";
  if (isset($_POST['submit'])) {
    if (isset($_POST['ten']) && !empty($_POST['ten']) && isset($_POST['loai']) && !empty($_POST['loai']) && isset($_POST['gia']) && !empty($_POST['gia']) && isset($_POST['message']) && !empty($_POST['message']) && isset($_FILES['image']) && !empty($_FILES['image'])) {

      $ten = $_POST['ten'];
      $loai = $_POST['loai'];
      $gia = $_POST['gia'];
      $message = $_POST['message'];
      $path = "../image/";
      $tmp_name = $_FILES['image']['tmp_name'];
      $anh = $_FILES['image']['name'];
      move_uploaded_file($tmp_name, $path . $anh);
    //   $rt = themsanpham($ten, $gia, $anh, $message, $loai, $conn);
    } else {
      echo '<script language="javascript">';
      echo 'alert("Bạn chưa nhập thông tin")';
      echo '</script>';
    }
  }
  ?>

  <div class="container-ad">
    <div class="edit-ad">
      <form role="form" method="POST" enctype="multipart/form-data" action="./Admin/addproduct">
        <div class="input-ad">
          <div class="label-ad">
            <label>Tên sản phẩm</label>
          </div>
          <input type="text" name="ten">
        </div>

        <div class="input-ad">
          <div class="label-ad">
            <label>Ảnh</label>
          </div>
          <input type="file" name="image">
        </div>

        <div class="input-ad">
          <div class="label-ad">
            <label>Giá</label>
          </div>
          <input type="text" name="gia">
        </div>

        <div class="input-ad">
          <div class="label-ad">
            <label for="loai">Chọn loại</label>
          </div>
          <select name="loai" id="loai">
         <?php   while ($rr = mysqli_fetch_array($data['loai'])) {
            ?>
              <option value="<?php echo $rr['DM_MA']; ?>"><?php echo $rr['DM_TEN'];  ?></option>
            <?php } ?>
          </select>
        </div>


        <div class="input-ad">
          <div class="label-ad">
            <label>Nội dung</label>
          </div>
          <textarea name="message" id="product-content" cols="50" rows="40"></textarea>
        </div>
        <div class="input-ad">

          <input type="submit" name="themsanpham" value="Thêm sản phẩm">
          <input type="reset" value="Xóa" >
        </div>
      </form>
    </div>




  </div>
  
