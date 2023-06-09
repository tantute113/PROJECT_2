<?php 
class ForgotController extends Controller{
public $var ;
public $login;
function __construct()
{
    $this->login=$this->model("classUser") ;


}
function index()
{
    
        $this->mail();
      
        $mail=new Mailer() ;
        if(isset($_POST['quenmatkhau']))
        {
            if(isset($_POST['email'])&&!empty($_POST['email']))
            {
               $email=$_POST['email'];
              $kt=$this->login->kiemtraemail($email);
              if($kt==0)
              {
                echo "<script>alert('Không tồn tại email');</script>";
                unset($_POST['email']);
              }else
              {
                 $code1 =substr(rand(0,999999),0,6);
                 $_SESSION['code123']=$code1; 
               
                $code="
                
                <div style='  width: 100%;' class='container'>
            <div style='text-align: center; background-color: rgb(0,115,186);
            width: 60%;
            margin: auto;
            height: 50px;
            border: 1px solid rgb(0,115,186);
            line-height: 15px;' class='header' > <h2 style='color: white;'  >MÃ XÁC NHẬN </h2></div>
            <div style=' 
            background-image: url(https://nhathauxaydung24h.com/wp-content/uploads/2021/05/background-trang-4.jpg);
            background-repeat:no-repeat;
            background-size: cover;
            padding: 0;
            margin: 0;
           width:60%;
        height: 150px;
        margin:auto;
        border: 1px solid rgb(0,115,186) ;
         '  class='body'>
        
        
                <div style=' margin: auto;
                line-height: 100px;' class='h1'>
        
        
                     <h1 style=' text-align: center;'>".$code1."</h1>
                </div>
        
        
        
            </div>
        </div>
                ";
                $title="Quên mật khẩu";
                  $mail->sendmail($title,$email,$code);
              }
             
                
            }else
            {
                echo "<script>alert('Email bỏ trống');</script>"; 
            }
           
        
            
        }
          
        if(isset($_POST['sosanhma']))
        {     
          $ma=$_POST['ma'];
       
       
          if($ma==$_SESSION['code123'])
          {
            $pass=$_POST['matkhaumoi'];
            $passrp=$_POST['matkhaumoirp'];
            if(strlen($pass)>7&&isset($_POST['matkhaumoi'])&&!empty($_POST['matkhaumoi'])&&strlen($passrp)>7&&isset($_POST['matkhaumoirp'])&&!empty($_POST['matkhaumoirp']))
            {
            if($pass==$passrp)
            {
                $passhash=password_hash($pass,PASSWORD_DEFAULT);
                
                if(empty($_POST['email']))
                {
                    echo "email không có";
                }
              $this->login->updatepass($passhash,$_POST['email']);
            
              echo "<script>alert('Cập nhật mật khẩu thành công');</script>";
              unset($_SESSION['code123']);
              unset($_POST['quenmatkhau']);
              unset($_POST['sosanhma']);
              unset($_POST['matkhaumoi']);
              unset($_POST['matkhaumoirp']);
            }
            else
            {
              echo "<script>alert('Mật khẩu nhập lại không đúng');</script>";
            }
            }else
            {
              echo "<script>alert('Vui lòng không để trống và mật khẩu phải trên 7 chữ cái');</script>";
            }
    
          }else
          {
            echo "<script>alert('Mã xác minh không khớp');</script>";
          }
         
        }
  

    $this->view('forgotview',["css"=>"login"]);
}

 
}


?>