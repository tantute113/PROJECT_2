<?php 
class SignupController extends Controller{
public $var ;
public $XT;
function __construct()
{
    $this->var=$this->model('testModel');
$this->XT=$this->model('classUser');
}
function index()
{
    if(isset($_POST['signup']))
    {
        if (isset($_POST['user'])&&!empty($_POST['user'])&&isset($_POST['tel'])&&!empty($_POST['tel'])&&isset($_POST['tel'])&&!empty($_POST['tel'])&&isset($_POST['pass'])&&!empty($_POST['pass'])&&isset($_POST['pass-repeat'])&&!empty($_POST['pass-repeat'])&&isset($_POST['gmail'])&&!empty($_POST['gmail'])) 
        {
            $username= addslashes($_POST['user']);
            
           
            $tel=addslashes($_POST['tel']);
            $address= addslashes($_POST['address']);
            $password = $_POST['pass']; 
            $rpassword = $_POST['pass-repeat'];
            $loai_tk = $_POST['loai'];
            $date=$_POST['date'];
            $gmail=$_POST['gmail'];
            $hashed_password = password_hash( $password, PASSWORD_DEFAULT);
            if($password==$rpassword){
            if($this->XT->Compare($username)==1)
            {
                echo "<script type='text/javascript'>alert('tên người dùng đã tồn tại');</script>";
            }
            else
            {
                
                $this->XT->Insert($username,$hashed_password,$date,$gmail,$address,$tel);
                echo '<script>alert("Đăng ký thành công !")</script>';
                header( "refresh:2;url=http://localhost/MVC_DOAN/Login" );
            }
        }else
        {
            echo "<script type='text/javascript'>alert('Mật khẩu nhập lại không khớp');</script>";
        }

        }else
        {
            echo "<script type='text/javascript'>alert('Thông tin trống');</script>";
        }
    }

    $this->view('signupview',["sv"=>$this->var->sanpham(),"page"=>"signup","css"=>"signup"]);
}
 function show(){
    echo "ShowhomeC";
 }


}


?>