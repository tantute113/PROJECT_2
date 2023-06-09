<?php 
class LoginController extends Controller{
public $var ;
public $login;
function __construct()
{
    $this->var=$this->model('testModel');
    $this->login=$this->model("classUser") ;


}
function index()
{
    if(isset($_POST['login']))
    {
       if(isset($_POST['pass']) && !empty($_POST['pass'])&&isset($_POST['user']) && !empty($_POST['user']))
        {
            $name=$_POST['user'];
            $pass=$_POST['pass'];
          
       if($this->login->Compare($name)==1)
       {
         $rs=$this->login->Getname($name);
      
       foreach($rs as $rt)
        $rtt=$rt->getPass_tk();
       
        if(password_verify($pass,$rtt))
        {
               if($rt->getType_tk()==1)
               {
                $_SESSION['admin'] =$name ;
                header("Location:http://localhost/MVC_DOAN/Admin");
               }
               
               elseif($rt->getType_tk()==2)
               {
                   $_SESSION['user'] =$name ;
               header("Location:http://localhost/MVC_DOAN/Home");
               }
               
            
        }else
        {
            echo "<script type='text/javascript'>alert('nhập không đúng mật khẩu');</script>";
        }

       }
        }
        else
        {
            echo '<script>alert("Chưa nhập đủ thông tin vui lòng nhập lại")</script>';
        }

    }
  

    $this->view('loginview',["sv"=>$this->var->sanpham(),"page"=>"login","css"=>"login"]);
}
function register()
{
   
     
}
 function show(){
    echo "ShowhomeC";
 }
 function Logout()
{
    if(isset($_SESSION['user']))
    {
  unset($_SESSION['user']);
  header("Location:http://localhost/MVC_DOAN/Home");
    }
}

}


?>