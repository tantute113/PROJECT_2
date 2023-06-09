<div class="container-right-ad">
  <div class="timkiem-ad">
    <form action="" method="POST">
      <input type="text" name="timkiem" value="<?php if (isset($_GET['timkiem'])) {
                                                  echo $_GET['timkiem'];
                                                }  ?>">
      <input type="submit" value="Tìm kiếm">
      <input type="hidden" name="action" value="tintuc">
      <div class="form-update-ad"><a href="./Admin/addnews">Thêm tin tức</a></div>
    </form>
  </div>
  <div class="table-ad">


    <table border="1">
      <thead>


        <tr>
          <th>STT</th>
          <th>Ảnh</th>
          <th>Tiêu đề</th>
          <th>Nội dung</th>
          <th>&nbsp;</th>
          <th>&nbsp;</th>

        </tr>

      </thead>

      <tbody>
       
        <?php
        $stt = 1;
        foreach($data['data'] as $ktt ) 
         { ?>
          <tr>
            <td><?php echo $stt;
                $stt++;  ?></td>
            <td><img style="max-width:50px;" src="./public/img/<?php echo $ktt['TT_HINHANH'];  ?>" alt=""></td>
            <td><?php echo $ktt['TT_TEN']; ?></td>
            <td><?php echo $ktt['TT_NOIDUNG'];   ?></td>

            <td><a class="sua" href="./Admin/editnews/<?php echo $ktt['TT_MA'];  ?>"><i style="color:white;" class="far fa-edit"></i></a></td>
            <td><a onclick="return del('<?php echo $ktt['TT_TEN']; ?>')" class="xoa" href="./Admin/deletenews/<?php echo $ktt['TT_MA']; ?>"><i style="color:white;" class="fas fa-trash-alt"></i></a></td>
          </tr>
        <?php } ?>


      </tbody>

    </table>
    <div class="phantrang">
      <span style="color: white;">Trang</span>
      <?php for ($i = 1; $i <= $data['numpage']; $i++) {
      ?>

<a href="./Admin/news/<?php echo $i;?>">
   <?php echo $i ;?>
  </a>

      <?php  } ?>
    </div>
  </div>
</div>