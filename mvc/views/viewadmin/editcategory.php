

<?php foreach($data['data'] as $rt ) ?>
   <div class="container-ad">
   <div class="edit-ad">
  
       <form role="form" method="POST" enctype="multipart/form-data"  action="">
        
  <div class="input-ad">
    <div class="label-ad">
       <label >Tên danh mục</label>
       </div>
       <input type="text" name="tendanhmuc" value="<?php echo $rt['DM_TEN']; ?>" >
          <input type="hidden" name="id" value="<?php echo $rt['DM_MA']; ?>" >
          </div>
           
        
           

          <div class="input-ad">
       
        <div class="label-ad">
       <label >Nội dung danh mục</label>
       </div>
        <textarea id="text2" name="noidungdanhmuc" id="product-content" cols="100" rows="40" ><?php echo $rt['DM_MOTA']; ?></textarea>
        </div>
        <div id="reset" class="input-ad">
        
       <input type="submit" name="submit" value="Cập nhật">
       <input type="reset" value="Reset">
        </div>
        </form>
   </div>




   </div> 
  

        