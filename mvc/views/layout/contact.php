<div class="content">
           <?php
 foreach($data['contact'] as $resuft)
 {
?>
           <div class="khung">
               <article>
                   <h1 class="thongtin">
                    <?php
                    echo $resuft->getRule_lh(); 
                      ?>  
                   <br><br><br><br>
                       LIÊN HỆ VỚI CHÚNG TÔI THÔNG QUA:
                       <br>
                       Địa Chỉ:<?php echo $resuft->getAddress_lh(); ?> 
                       <br>
                       SĐT:<?php echo $resuft->getTel_lh(); ?> 
                       <br>
                       Email: <?php echo $resuft->getEmail_lh() ;?>
                       <br>
                       Facebook: <?php echo $resuft->getFace_lh(); ?>
      
                   </h1>

               </article>
           </div>
           <div class="diachi">
               <div>
                   <h2>HƯỚNG DẪN ĐI ĐƯỜNG</h2>
               </div><br>
               <iframe <?php echo $resuft->getMap_lh(); ?> width="800" height="800" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
           </div>
           <?php }?>
       </div>
      
   </div>
