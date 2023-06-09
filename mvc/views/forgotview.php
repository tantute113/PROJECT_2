<!DOCTYPE html>
<html lang="en">

<head>
<base href="http://localhost/MVC_DOAN/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐĂNG NHẬP</title>
    <link rel="stylesheet" href="public/css/login.css">
    <script src="https://kit.fontawesome.com/3cf6918e55.js" crossorigin="anonymous"></script>
    <style type="text/css">

        #user{
            width: 220px !important;
            border-radius: 24px 0px 0px 24px;
            margin-bottom: 30px;
        }
        #telephone{
            margin-top: 10px;
        }
        #gui{
            padding: 12px;
        width: 70px !important;
      border-radius: 0px 0px 0px 0px;
        }
        .label{
            height: 450px;
        }
    </style>
</head>

<body>

    <div class="from">
        <form  action="./Forgot/index" method="POST" class="label">
            <h1>Quên mật khẩu <a href="Home/index"><i style="color: white;" class="fas fa-sign-out-alt"></i></a></h1>
           
            <input type="text" onkeyup="isEmpty()" name="email" id="user" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" placeholder="Nhập gmail đã đăng ký" value="<?php if(isset($_POST['user'])){echo $_POST['user'];}?>">
<input id="gui" disabled="disabled" type="submit" name="quenmatkhau" value="Gửi">
           
          
            <input type="txt" name="ma" id="telephone" placeholder="Mã xác nhận">
            <input type="password" name="matkhaumoi" id="telephone" placeholder="Mật khẩu mới">
            <input type="password" name="matkhaumoirp" id="telephone" placeholder="Mật khẩu nhập lại">
            <input type="submit" name="sosanhma" value="Đặt lại mật khẩu">
            <br>
            <div class="why"><a href="./Login">Đăng nhập</a></div>
        </form>


    </div>
    <div class="box">
     
    </div>
    <script type="text/javascript">
       

   function isEmpty()
{
 let email= document.getElementById("user").value;
 if(email != "")
 {
     document.getElementById("gui").removeAttribute("disabled");
    var gui=document.getElementById("gui");
 
 }
}

        // $('form > input').keyup(function(){

        // }) ;
        // const email = document.getElementById("email");
        // const gui = document.getElementById("gui");

        // function hello(){
        //     document.getElementById(gui).disabled = false
        // }
       
        // function ajaxPass(getValueFrom) {

        // document.getElementById(getValueFrom).disabled= true;
    

        // }
    </script>
</body>

</html>