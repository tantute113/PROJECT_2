<?php
class CartController extends Controller
{

    public $var ;
    public $var1; 
    public $var2; 
    public $var3;
    public $couple ;
    function __construct()
{
    $this->var=$this->model('classProduct');
    $this->var1=$this->model('classCategory');
    $this->couple=$this->model('classCouple');
    $this->var3=$this->model('classOrder') ;
    $this->user=$this->model('classUser') ;
}

    function index()
    {
        if(isset($_POST['order'])){
        if(isset($_POST['hoten'])&&!empty($_POST['hoten'])&&isset($_POST['diachi'])&&!empty($_POST['diachi'])&&isset($_POST['sodienthoai'])&&!empty($_POST['sodienthoai'])){
        if(isset($_POST['order']))
        {
           
            if(isset($_SESSION['user'])){
                if(isset($_POST['thanhtoan']))
                {
                    if($_POST['thanhtoan']==0)
                    {
                     
                     
                       
                       
                        $laykh=$this->var3->laykh($_SESSION['user']);
        while($inra=mysqli_fetch_array($laykh))
        {
      $_POST['giamgia'];
      $this->var3->tatkhoangoai();
           $r1=$this->var3->luudonhang($inra['TK_TEN'],$_POST['tong'],date("Y-m-d"),$_POST['giamgia'],$_POST['ghichu']);
         
           
           $r2=$this->var3->layid();
           echo $r2 ;

        }
        foreach($_SESSION['cart'] as $id=>$value)
        {
          
         $this->var3->luuchitietsp($r2,$_SESSION['cart'][$id]['SP_MA'],$_SESSION['cart'][$id]['quantity'],$_SESSION['cart'][$id]['SP_GIA']);
        
        }
        echo "<script>alert('Cảm ơn bạn đã mua hàng');</script>"; 
        
            header( "refresh:2;http://localhost/MVC_DOAN/Home/index" );
            unset($_SESSION['cart'] );
          
                    }
                    if($_POST['thanhtoan']==1)
                    {
                        $id= $this->var3->maxhoadon();
                        $kt=  mysqli_fetch_array($id);
                      
                      
                        $_SESSION['orderid']= ++$kt[0];
                        $_SESSION['money']=$_POST['tong'];
                        header("Location:http://localhost/MVC_DOAN/Vnpay");
                     
                       
        
                    }
                }
            }else


            {


                 
                if(isset($_POST['thanhtoan']))
                    {
                        if($_POST['thanhtoan']==0)
                        {
                            $_POST['giamgia'];
                    $ten=$_POST['hoten'];
                            
                     $sdt=$_POST['sodienthoai'];
                        $diachi=$_POST['diachi'];
                         $this->var3->addkh($ten,$sdt,$diachi);

                         $r4=$this->var3->layid();
                        
                           
                            
           
       
          $this->var3->tatkhoangoai();
               $r1=$this->var3->luudonhang($r4,$_POST['tong'],date("Y-m-d"),$_POST['giamgia'],$_POST['ghichu']);
             
               
               $r2=$this->var3->layid();
               
    
            
            foreach($_SESSION['cart'] as $id=>$value)
            {
              
             $this->var3->luuchitietsp($r2,$_SESSION['cart'][$id]['SP_MA'],$_SESSION['cart'][$id]['quantity'],$_SESSION['cart'][$id]['SP_GIA']);
            
            }
          
            echo "<script>alert('Cảm ơn bạn đã mua hàng');</script>"; 
            header( "refresh:3;http://localhost/MVC_DOAN/Home/index" );
            unset($_SESSION['cart'] );
            
                        }
                        if($_POST['thanhtoan']==1)
                        {
                            $id= $this->var3->maxhoadon();
                            $kt=  mysqli_fetch_array($id);
                          
                          
                            $_SESSION['orderid']= ++$kt[0];
                            $_SESSION['money']=$_POST['tong'];
                            header("Location:http://localhost/MVC_DOAN/Vnpay");
                         
                           
            
                        }
                    }
  
               
            }
            



        }
    }else
    {
        echo "<script>alert('Thông tin rỗng');</script>";   
    }
}
        if ( isset($_POST['muangay']))
        { 
         
        $id=$_POST['id'];
        
    
      
       
         if(empty($_SESSION['cart'][$id]))
         {    $_SESSION['cart'][$id]=array();
       
             $rt=$this->var->productid($id);
             $rtt=mysqli_fetch_array($rt);
           
             
            
          
             $_SESSION['cart'][$id]['SP_MA']=$id;
             $_SESSION['cart'][$id]['SP_TEN']=$rtt['SP_TEN'];
             $_SESSION['cart'][$id]['SP_GIA']=$rtt['SP_GIA'];
             $_SESSION['cart'][$id]['SP_ANH']=$rtt['SP_ANH'];
             $_SESSION['cart'][$id]['quantity']=1;
             $array="";
             foreach($_SESSION['cart'] as $id =>$value)
             {
            $array.= $_SESSION['cart'][$id]['SP_TEN'];
             }
        
      
            
         }else
         {
           
            $_SESSION['cart'][$id]['quantity']++;
            
             
         }
        //  $sql=null;
        //  foreach($_SESSION['cart'] as $id =>$value)
        //  {
        //   $sql.=$id.",";
        //  }
        //  $sql=substr($sql,0,-1);
        //  echo $sql;
        }




        
            if(isset($_SESSION['user']))
            {
        if(isset($_POST['couple']))
        {
            $giamgia=$_POST['giamgia'];
           $rtt=$_SESSION['user'];
  $rt= $this->couple->giamgia($giamgia);
  $rttt=$this->var3->laykh($_SESSION['user']);
   $kq= mysqli_fetch_array($rt);
   $kqq=mysqli_fetch_array($rttt);
   if(mysqli_num_rows($rt)==1)
   {
   
    $this->view('cartview',[
        "sp"=>$_SESSION['cart'],
        "css"=>"cart",
        "mgg"=>$kq['GG_PHANTRAM'],
        "kh"=>$this->var3->laykh($_SESSION['user'])
    ]);  
   }else
   {
    $this->view('cartview',[
        "sp"=>$_SESSION['cart']  ,
        "css"=>"cart",
        "kh"=>$this->var3->laykh($_SESSION['user'])
    ]); 
   }
           
        }else
        {
            $rttt=$this->var3->laykh($_SESSION['user']);
            $kqq=mysqli_fetch_array($rttt);
            $this->view('cartview',[
                "sp"=>$_SESSION['cart'],
                "css"=>"cart",
                "kh"=>$this->var3->laykh($_SESSION['user'])
            ]); 
        }
    }else{
        if(isset($_POST['couple']))
        {
            $giamgia=$_POST['giamgia'];
           
  $rt= $this->couple->giamgia($giamgia);
   $kq= mysqli_fetch_array($rt);
   if(mysqli_num_rows($rt)==1)
   {
   
    $this->view('cartview',[
        "css"=>"cart",
        "sp"=>$_SESSION['cart'],
        "mgg"=>$kq['GG_PHANTRAM']
    ]);  
   }else
   {
    $this->view('cartview',[
        "css"=>"cart",
        "sp"=>$_SESSION['cart']
        
    ]); 
   }
           
        }else
        {
          
            $this->view('cartview',[
                "css"=>"cart",
                "sp"=>$_SESSION['cart']
            ]); 
        }
    }

       /*==================================pay==============================================*/
      

    }
    function rise($id="")
    {
        $_SESSION['cart'][$id]['quantity']++;
        
        header("Location:http://localhost/MVC_DOAN/Cart/index");

    }
    function reduce($id="")
    {
        $_SESSION['cart'][$id]['quantity']--;
     if($_SESSION['cart'][$id]['quantity']<1)
     {
        $_SESSION['cart'][$id]['quantity']=1;

     }
     header("Location:http://localhost/MVC_DOAN/Cart/index");
        
    }
    public function delete($id="")
    {
        unset($_SESSION['cart'][$id]);
        header("Location:http://localhost/MVC_DOAN/Cart/index");
    }
   

}


















?>