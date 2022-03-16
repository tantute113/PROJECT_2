<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <base href="http://localhost/MVC_DOAN/">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐĂNG KÝ</title>
    <link rel="stylesheet" href="public/css/<?php echo $data['css']; ?>.css">
    <script src="https://kit.fontawesome.com/3cf6918e55.js" crossorigin="anonymous"></script>

</head>

<body>

    <div class="from">
        <form method="POST" class="label">
            <h1>Đăng Ký <a href="Home/index"><i style="color: white;" class="fas fa-sign-out-alt"></i></a></h1>
            <label for="user">Tên người dùng:</label>
            <input type="text" name="user" id="user" placeholder="vui lòng nhập tên" value="<?php if(!empty($_POST['user'])){echo $_POST['user']; } ?>">
            <label for="telephone">Số điện thoại:</label>
            <input type="text" pattern="(0)\d{9}" name="tel" id="telephone" placeholder="nhập đủ 10 chữ số" value="<?php if(!empty($_POST['tel'])){echo $_POST['tel']; } ?>">
            <label for="date">Ngày sinh:</label>
            <input name="date" id="date" type="date" min="1980-01-01" max="2010-01-01" value="<?php if(!empty($_POST['date'])){echo $_POST['date']; } ?>">
            <label for="text">Địa chỉ:</label>
            <textarea name="address" id="text" cols="30" rows="5"><?php if(!empty($_POST['address'])){echo $_POST['address']; } ?></textarea>
            <label for="password">Mật khẩu:</label>
            <input type="password" name="pass" id="password" placeholder="vui lòng nhập....."value="<?php if(!empty($_POST['pass'])){echo $_POST['pass']; } ?>">
            <label for="password1">Nhập lại mật khẩu:</label>
            <input type="password" name="pass-repeat" id="password1" placeholder="vui lòng nhập."value="<?php if(!empty($_POST['pass-repeat'])){echo $_POST['pass-repeat']; } ?>">
            <input type="hidden" name="loai" value="0">
            <input id="reset" type="reset" value="Reset">
            <input type="submit" name="submit" value="Đăng kí">
            <p></p>
        </form>
    </div>
    <div class="box">
      
    </div>
    
</body>

</html>