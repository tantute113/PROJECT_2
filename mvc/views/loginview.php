<!DOCTYPE html>
<html lang="en">

<head>
<base href="http://localhost/MVC_DOAN/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐĂNG NHẬP</title>
    <link rel="stylesheet" href="public/css/<?php echo $data['css']; ?>.css">
    <script src="https://kit.fontawesome.com/3cf6918e55.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="from">
        <form  action="Login" method="POST" class="label">
            <h1>Đăng Nhập <a href="Home/index"><i style="color: white;" class="fas fa-sign-out-alt"></i></a></h1>
            <label for="user">Tên người dùng:</label>
            <input type="text" name="user" id="user" placeholder="vui lòng nhập tên" value="<?php if(isset($_POST['user'])){echo $_POST['user'];}?>">

            <label for="telephone">Mật khẩu:</label>
            <input type="password" name="pass" id="telephone" placeholder="vui lòng nhập mật khẩu">
            <input type="submit" name="login" value="Đăng Nhập">
            <br>
            <div class="why"><a href="Signup">Đăng ký</a></div>
            <div class="why"><a href="Forgot">Quên mật khẩu</a></div>
        </form>


    </div>
    <div class="box">
     
    </div>
</body>

</html>