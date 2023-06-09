<?php
class ThanksController extends Controller{

public $var;
public $var1;
public $t;
function __construct()
{
   $this->var=$this->model("classOrder");
   
}

    function index()
    {
       
    echo "<pre>";
       
        $result = str_replace('?', '',$_SERVER['REQUEST_URI']);
        $t=explode("/",filter_var(trim($result)));
       $search = ['vnp_Amount=','vnp_BankCode=','vnp_BankTranNo=','vnp_CardType=','vnp_OrderInfo=','vnp_PayDate=','vnp_ResponseCode=','vnp_TmnCode=','vnp_TransactionNo=','vnp_TransactionStatus=','vnp_TxnRef=','vnp_SecureHash='];
       $result = str_replace($search, '',$t[4]);
       $t=explode("&",filter_var(trim($result)));  
  
    echo "</pre>";
$laykh=$this->var->laykh($_SESSION['user']);
while($inra=mysqli_fetch_array($laykh))
{
  
$r1=$this->var->luudonhang($inra['TK_TEN'],substr($t[0],0,-2),date("Y-m-d"),'',$t[4]);
}
foreach($_SESSION['cart'] as $id=>$value)
{
   
 $this->var->luuchitietsp($t[10],$_SESSION['cart'][$id]['SP_MA'],$_SESSION['cart'][$id]['quantity'],$_SESSION['cart'][$id]['SP_GIA']);

}
$this->var->luuvnpay(substr($t[0],0,-2),$t[1],$t[2],$t[3],$t[4],$t[5],$t[7],$t[8],$t[10]);
header("Location:http://localhost/MVC_DOAN/Camon/index" );  
       
   
    }

}







?>