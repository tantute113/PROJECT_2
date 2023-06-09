<div class="content">
   
            <div class="content1">
                <div class="danhmuc">
                    <ul>
                        <li>
                            <h2>DANH MỤC</h2>
                        </li>
                      
                    
                       <?php
                    foreach($data['danhmucdau'] as $row)
                    {
                       ?>
                       <li  onclick=" <?php echo $row->getLink_dm(); ?>" class="active">
                          <a  >
                          <?php echo $row->getName_dm(); ?>
                    </a>
                    </li>
               <?php  }?>
             
<?php 
foreach($data['danhmuccuoi'] as $row)
{
?>
                    <li onclick=" <?php echo $row->getLink_dm(); ?>"><a  ><?php echo $row->getName_dm(); ?></a></li>
                  
                    <?php  }?>
                    </ul>
                </div>
            </div>

            <div class="product">

                <div class="title">
                    <a  name="TRA"></a>
                    <H1 id="tra">Trà</H1>
                </div>
                <div class="items">
                   
                <?php  foreach($data['tra'] as $tra){ ?>
                    <div class="item">

                        <img src="public/img/<?php echo $tra->getHinh_sp() ; ?>">
                        <div class="cart-a">
                            <p><a href="./Detailproduct/index/<?php echo $tra->getMa_sp();  ?>"><?php echo $tra->getTen_sp() ;  ?></a></p>
                           <?php echo number_format($tra->getGia_sp() ,'0',",",".");  ?> VND
                            
                            <form action="./Cart/index" method="POST">
                                <input type="hidden" name="id" value="<?php echo $tra->getMa_sp() ; ?>">
                                <input type="submit" name="muangay" value="Mua ngay">
                                
                            </form>
                        </div>
                    </div>

                    <?php }?>
                    <!-- private int $Ma_sp;
    private String $Ten_sp;
    private String $Gia_sp;
    private String $Mota_sp;
    private String $Hinh_sp ;
    private int $Dm_sp; -->  
                    <!-- ------------------------------------------------ -->
                </div>
                <!-- ----------------------------------------------------------------- -->

                <div class="title">
                    <a href="#" name="DETOX"></a>
                    <H1 id="detox">Detox</H1>
                </div>
                <div class="items">
                <?php  foreach($data['detox'] as $tra){ ?>
                    <div class="item">

                        <img src="public/img/<?php echo $tra->getHinh_sp() ; ?>">
                        <div class="cart-a">
                        <p><a href="./Detailproduct/index/<?php echo $tra->getMa_sp();  ?>"><?php echo $tra->getTen_sp() ;  ?></a></p>
                           <?php echo number_format($tra->getGia_sp() ,'0',",",".");  ?> VND
                            
                          <form action="./Cart/index" method="POST">
                                <input type="hidden" name="id" value="<?php echo $tra->getMa_sp() ; ?>">
                                <input type="submit" name="muangay" value="Mua ngay">
                                
                            </form>
                        </div>
                    </div>

                    <?php }?>
                    <!-- private int $Ma_sp;
    private String $Ten_sp;
    private String $Gia_sp;
    private String $Mota_sp;
    private String $Hinh_sp ;
    private int $Dm_sp; -->  
                    <!-- ------------------------------------------------ -->
                </div>

                <!-- ------------------------------------------------------------ -->
                <div class="title">
                    <a href="#" name="THUCDUONG"></a>
                    <H1 id="thucduong">Thực Dưỡng</H1>
                </div>
                <div class="items">
                <?php  foreach($data['thucduong'] as $tra){ ?>
                    <div class="item">

                        <img src="public/img/<?php echo $tra->getHinh_sp() ; ?>">
                        <div class="cart-a">
                        <p><a href="./Detailproduct/index/<?php echo $tra->getMa_sp();  ?>"><?php echo $tra->getTen_sp() ;  ?></a></p>
                           <?php echo number_format($tra->getGia_sp() ,'0',",",".");  ?> VND
                           <form action="./Cart/index" method="POST">
                                <input type="hidden" name="id" value="<?php echo $tra->getMa_sp() ; ?>">
                                <input type="submit" name="muangay" value="Mua ngay">
                                
                            </form>
                        </div>
                    </div>

                    <?php }?>
                    <!-- private int $Ma_sp;
    private String $Ten_sp;
    private String $Gia_sp;
    private String $Mota_sp;
    private String $Hinh_sp ;
    private int $Dm_sp; -->  
                    <!-- ------------------------------------------------ -->
                </div>


                <div class="title">
                    <a href="#" name="NUOCUONGKHAC"></a>
                    <H1 id="nuocuongkhac">Nước uống khác</H1>
                  
                </div>
                <div class="items">
                <?php  foreach($data['nuocuongkhac'] as $tra){ ?>
                    <div class="item">

                        <img src="public/img/<?php echo $tra->getHinh_sp() ; ?>">
                        <div class="cart-a">
                        <p><a href="./Detailproduct/index/<?php echo $tra->getMa_sp();  ?>"><?php echo $tra->getTen_sp() ;  ?></a></p>
                           <?php echo number_format($tra->getGia_sp() ,'0',",",".");  ?> VND
                            
                           <form action="./Cart/index" method="POST">
                                <input type="hidden" name="id" value="<?php echo $tra->getMa_sp() ; ?>">
                                <input type="submit" name="muangay" value="Mua ngay">
                            </form>
                        </div>
                    </div>

                    <?php }?>
                    <!-- private int $Ma_sp;
    private String $Ten_sp;
    private String $Gia_sp;
    private String $Mota_sp;
    private String $Hinh_sp ;
    private int $Dm_sp; -->  
                    <!-- ------------------------------------------------ -->
                </div>

                <div class="title">
                    <a href="#" name="MONANVAT"></a>
                    <H1 id="monanvat">Món ăn vặt</H1>
                </div>
                <div class="items">
                <?php  foreach($data['monanvat'] as $tra){ ?>
                    <div class="item">

                        <img src="public/img/<?php echo $tra->getHinh_sp() ; ?>">
                        <div class="cart-a">
                        <p><a href="./Detailproduct/index/<?php echo $tra->getMa_sp();  ?>"><?php echo $tra->getTen_sp() ;  ?></a></p>
                           <?php echo number_format($tra->getGia_sp() ,'0',",",".");  ?> VND
                            
                           <form action="./Cart/index" method="POST">
                                <input type="hidden" name="id" value="<?php echo $tra->getMa_sp() ; ?>">
                                <input type="submit" name="muangay" value="Mua ngay">
                            </form>
                        </div>
                    </div>

                    <?php }?>
                    <!-- private int $Ma_sp;
    private String $Ten_sp;
    private String $Gia_sp;
    private String $Mota_sp;
    private String $Hinh_sp ;
    private int $Dm_sp; -->  
                    <!-- ------------------------------------------------ -->
                </div>
            <div style="clear:right"></div>
          
        </div>
    </div>
    <script type="text/javascript">
           $(document).on('click', 'ul li', function() {
            $(this).addClass('active').siblings().removeClass('active')
        })
        function tra() {
                var elem = document.getElementById("tra");
                elem.scrollIntoView();
            }
            function detox() {
                var elem = document.getElementById("detox");
                elem.scrollIntoView();
            }
            function thucduong() {
                var elem = document.getElementById("thucduong");
                elem.scrollIntoView();
            }
            function nuocuongkhac() {
                var elem = document.getElementById("nuocuongkhac");
                elem.scrollIntoView();
            }
            function monanvat() {
                var elem = document.getElementById("monanvat");
                elem.scrollIntoView();
            }
    </script>