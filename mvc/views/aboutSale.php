<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost/MVC_DOAN/">
    <script src="https://kit.fontawesome.com/3cf6918e55.js" crossorigin="anonymous"></script>
    <title>Document</title>
<style>
    .container{
        width: 960px;
        margin: 0 auto;
    }
    img{
        min-height: 300px;
        width: 250px;
    }
</style>
<body>
    <div class="container">
        <a href="./Sale">Trở lại</a>
        <?php if (isset($data['data'])) {
            $rtt = mysqli_fetch_array($data['data']);
        } ?>
        <div class="data">
            <div class="img">
                <img src="./public/img/<?php echo $rtt['GG_ANH']; ?>" alt="">
            </div>

            <div class="in4">
                <div class="h2">
                    <h2>Thông tin mã giảm giá:</h2>
                </div>
                <div class="p">
                    <?php echo $rtt['GG_TEN']; ?>
                </div>
                <div class="h2">
                    <h4>Chi tiết mã giảm giá:</h4>
                </div>
                <div class="p">
                    <?php echo $rtt['GG_GHICHU']; ?>
                </div>
            </div>

            <div class="error">
                <h4>*Chỉ áp dụng tối đa 1 mã giảm giá trên 1 đơn hàng</h4>
            </div>
        </div>
</body>

</html>