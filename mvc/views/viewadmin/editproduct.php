
<?php foreach($data['id'] as $kt)    ;?>
  <div class="container-ad">
    <div class="edit-ad">
      <form role="form" method="POST" enctype="multipart/form-data" action="./Admin/editproduct">
        <div class="input-ad">
          <div class="label-ad">
            <label>Tên sản phẩm</label>
          </div>  <input type="hidden" name="masp" value="<?php echo $kt['SP_MA']; ?>">
          <input type="text" name="ten" value="<?php echo $kt['SP_TEN']; ?>">
        </div>
        <div class="input-ad">
          <div class="label-ad">
       <label >Ảnh hiện tại </label>
       </div>
          <img style="max-width:100px ;" src="./public/img/<?php echo $kt['SP_ANH']; ?>" alt="">
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
          <input type="text" name="gia"  value="<?php echo $kt['SP_GIA']; ?>">
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
          <textarea name="message" id="product-content" cols="50" rows="40"> <?php echo $kt['SP_MOTA']; ?></textarea>
        </div>
        <div class="input-ad">

          <input type="submit" name="sanpham" value="Cập nhật sản phẩm">
          <input type="reset" value="Xóa" >
        </div>
      </form>
    </div>




  </div>
  
