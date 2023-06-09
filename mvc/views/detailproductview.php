<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost/MVC_DOAN/" >
    <link rel="stylesheet" href="public/css/<?php echo $data['css'] ;?>.css">
    <script src="https://kit.fontawesome.com/3cf6918e55.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style type="text/css">
     
    </style>
</head>

<body>
    <div class="container">
        <?php if(isset($data['data'])){
            $rtt=mysqli_fetch_array($data['data']);
        } ?>
        <div class="header">
            <h3><a href="./Product/index" ><i style=" width:30px; color: white;" class="fas fa-sign-out-alt"></i></a>Chi tiết sản phẩm</h3>
        </div>
        <div class="data">
            <div class="img">
                <img src="./public/img/<?php echo $rtt['SP_ANH']; ?>" alt="">
            </div>
            <div class="img1">
                <h1><?php echo $rtt['SP_TEN']; ?></h1>
                <h3>Giá : <?php echo number_format($rtt['SP_GIA'],'0',",",".");  ?> VND</h3>



                
                <form action="./Cart/index" method="POST">
                <input type="hidden" name="id" value="<?php echo $rtt['SP_MA'] ; ?>">
                    <input type="submit"  name="muangay"  value="Thêm vào giỏ hàng">
                </form>
                <div class="info">
                    <div class="h2">
                        <h2>Thông tin sản phẩm:</h2>
                    </div>
                    <div class="p">
                        <?php echo $rtt['SP_MOTA'] ;?>
                    </div>
                </div>
            </div>
        </div>

        <div class="error">
            <h4>*hình ảnh và thông tin chỉ có tính minh họa</h4>
        </div>
    </div>
</body>

</html>