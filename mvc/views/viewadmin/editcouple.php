

   <div class="container-ad">
   <div class="edit-ad">
  
       <form role="form" method="POST" enctype="multipart/form-data"  action="./Admin/editcouple">
       
       <?php foreach($data['data'] as $inra ) ?>
  <div class="input-ad">
    <div class="label-ad">
       <label >Mã giảm giá</label>
       </div>
       <input type="hidden" name="idsp" value="<?php echo $inra['GG_MA']; ?>">
          <input type="text" name="magg" pattern="[A-Za-z1-9]{5}" value="<?php echo $inra['GG_MA']; ?>" placeholder="vui lòng nhập 5 kí tự">
          </div>

          <div class="input-ad">
          <div class="label-ad">
       <label >Ảnh hiện tại </label>
       </div>
          <img style="max-width:100px ;" src="./public/img/<?php echo $inra['GG_ANH']; ?>" alt="">
          </div> 
          <div class="input-ad">
          <div class="label-ad">
            <label>Ảnh</label>
          </div>
          <input type="file" name="image">
        </div>

          <div class="input-ad">
    <div class="label-ad">
       <label >Tên mã giảm giá</label>
       </div>
          <input type="text" name="tengg" value="<?php echo $inra['GG_TEN']; ?>" >
          </div>

          <div class="input-ad">
    <div class="label-ad">
       <label >Phần trăm giảm giá</label>
       </div>
          <input type="text" name="ptgg"  value="<?php echo $inra['GG_PHANTRAM']; ?>">
          </div>
           
          <div class="input-ad">
    <div class="label-ad">
       <label >Ngày bắt đầu</label>
       </div>
          <input type="date" name="ngaybatdau"value="<?php echo $inra['GG_BATDAU']; ?>" >
          </div>
          <div class="input-ad">
    <div class="label-ad">
       <label > Ngày kết thúc</label>
       </div>
          <input type="date" name="ngayketthuc" value="<?php echo $inra['GG_KETHUC']; ?>" >
          </div>
           
          <div class="input-ad">
        <div class="label-ad">
       <label >Ghi chú</label>
       </div>
        <textarea name="ghichugg" id="product-content" cols="100" rows="40" ><?php echo $inra['GG_GHICHU']; ?></textarea>
       
        </div>

        
        <div id="reset" class="input-ad">
        
       <input type="submit" name="submit" value="Cập nhật mã giảm giá">
       <input type="reset" value="Reset">
        </div>
        </form>
   </div>




   </div> 

        