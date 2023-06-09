
 

  <div class="container-ad">
    <div class="edit-ad">
      <form role="form" method="POST" enctype="multipart/form-data" action="./Admin/addnews">
        <div class="input-ad">
          <div class="label-ad">
            <label>Tiêu đề </label>
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
            <label>Nội dung</label>
          </div>
          <textarea name="message" id="product-content" cols="50" rows="40"></textarea>
        </div>
        <div class="input-ad">

          <input type="submit" name="submit" value="Thêm tin tức">
          <input type="reset" value="Xóa" >
        </div>
      </form>
    </div>




  </div>
  
