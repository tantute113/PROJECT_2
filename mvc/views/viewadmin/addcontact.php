

  <?php foreach($data['data'] as $rt)  ?>
  <div class="container-ad">
    <div class="edit-ad">
    
      <form action="./Admin/addcontact" method="POST">
        <div class="input-ad">
          <div class="label-ad">
            <input type="hidden" name="idlh" value="<?php echo $rt['LH_MA']; ?>">
            <label>Facebook</label>
          </div>
          <input type="text" name="facebook" value="<?php echo $rt['LH_FACE']; ?>"">

        </div>
        <div class="input-ad">
          <div class="label-ad">
            <label>số điện thoại</label>
          </div>
          <input type="text" name="sodienthoai" value="<?php echo $rt['LH_SDT']; ?>"   >

        </div>

        <div class="input-ad">
          <div class="label-ad">
            <label>Email</label>
          </div>
          <input type="text" name="email" value="<?php echo $rt['LH_EMAIL']; ?>">
        </div>


        <div class="input-ad">
          <div class="label-ad">
            <label>Địa chỉ</label>
          </div>
          <textarea name="diachi" id="product-content" cols="100" rows="40"><?php echo $rt['LH_DIACHI']; ?></textarea>
          <div class="label-ad">
            <label>Điều khoản</label>
          </div>
          <textarea name="dieukhoan" id="product-content" cols="100" rows="40"><?php echo $rt["LH_DIEUKHOAN"]; ?></textarea>
          <div class="label-ad">
            <label>Bản đồ</label>
          </div>
          <textarea name="bando" id="product-content" cols="100" rows="40"><?php echo $rt["LH_BANDO"]; ?></textarea>
        </div>
        <div class="input-ad">
          <input type="submit" name="submit" value="Cập nhật">
        </div>
      </form>
    </div>


  </div>
  
