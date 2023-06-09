

   <div class="container-ad">
   <div class="edit-ad">
  
       <form role="form" method="POST" enctype="multipart/form-data"  action="./Admin/addcouple">
       

  <div class="input-ad">
    <div class="label-ad">
       <label >Mã giảm giá</label>
       </div>
          <input type="text" name="magg" pattern="[A-Za-z1-9]{5}" placeholder="vui lòng nhập 5 kí tự">
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
          <input type="text" name="tengg" >
          </div>

          <div class="input-ad">
    <div class="label-ad">
       <label >Phần trăm giảm giá</label>
       </div>
          <input type="text" name="ptgg" >
          </div>
           
          <div class="input-ad">
    <div class="label-ad">
       <label >Ngày bắt đầu</label>
       </div>
          <input type="date" name="ngaybatdau" >
          </div>
          <div class="input-ad">
    <div class="label-ad">
       <label > Ngày kết thúc</label>
       </div>
          <input type="date" name="ngayketthuc" >
          </div>
           
          <div class="input-ad">
        <div class="label-ad">
       <label >Ghi chú</label>
       </div>
        <textarea name="ghichugg" id="product-content" cols="100" rows="40" ></textarea>
       
        </div>

        
        <div id="reset" class="input-ad">
        
       <input type="submit" name="submit" value="Thêm mã giảm giá">
       <input type="reset" value="Xóa">
        </div>
        </form>
   </div>

   </div> 

        