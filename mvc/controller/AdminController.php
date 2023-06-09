<?php 
class AdminController extends Controller {
    public $var ;
    public $user;
    public $news;
    public $bill;
    public $detailbill;
    public $contact ;
    public $category;
    public $couple;
    function __construct()
{
  if(!isset($_SESSION['admin']))
  {
     header("Location:http://localhost/MVC_DOAN/Home/index");
  }
    $this->var=$this->model('classProduct');
    $this->user=$this->model('classUser');
    $this->news=$this->model('classNews');
  $this->bill=$this->model('classOrder');
$this->detailbill=$this->model('classDetailorder');

$this->contact=$this->model("classContact");

$this->category=$this->model('classCategory');
$this->couple=$this->model('classCouple');

}
function index($i=1){
 
    if(isset($_POST['timkiem']))
    {
        $this->view('adminview',[
            "data"=>$this->var->offset("1",$_POST['timkiem']),
            "page"=>"productadmin",
            "css"=>"admincss",
            "numpage"=>$this->var->numpage()
            ]);
    }
    else
    {
    $this->view('adminview',[
    "data"=>$this->var->offset($i,""),
    "page"=>"productadmin",
    "css"=>"admincss",
    "numpage"=>$this->var->numpage()
    ]);
}
}
function user($i=1)
{ 
    if(isset($_POST['timkiem']))
    {
        $this->view('adminview',[
            "data"=>$this->user->offset("1",$_POST['timkiem']),
            "page"=>"useradmin",
            "css"=>"admincss",
            "numpage"=>$this->user->numpage()
            ]);
    }
    else
    {
        $this->view('adminview',[
            "data"=>$this->user->offset($i,""),
            "page"=>"useradmin",
            "css"=>"admincss",
            "numpage"=>$this->user->numpage()
            ]);
}
 

    
}

function news($i=1)
{

    if(isset($_POST['timkiem']))
    {
        $this->view('adminview',[
            "data"=>$this->news->offset("1",$_POST['timkiem']),
            "page"=>"newsadmin",
            "css"=>"admincss",
            "numpage"=>$this->news->numpage()
            ]);
    }
    else
    {
        $this->view('adminview',[
            "data"=>$this->news->offset($i,""),
            "page"=>"newsadmin",
            "css"=>"admincss",
            "numpage"=>$this->news->numpage()
            ]);
}
   

    // $this->view('adminview',[
    //     "data"=>$this->news->offset(),
    //     "page"=>"newsadmin",
    //     "numpage"=>$this->news->numpage()
    //     ]);
}
function order($i=1)
{

    if(isset($_POST['timkiem']))
    {
        $this->view('adminview',[
            "data"=>$this->bill->offset("1",$_POST['timkiem']),
            "page"=>"billadmin",
            "css"=>"admincss",
            "numpage"=>$this->bill->numpage()
            ]);
    }
    else
    {
        $this->view('adminview',[
            "data"=>$this->bill->offset($i,""),
            "page"=>"billadmin",
            "css"=>"admincss",
            "numpage"=>$this->bill->numpage()
            ]);
}

    

}
function vnpay($i=1)
{

    if(isset($_POST['timkiem']))
    {
        $this->view('adminview',[
            "data"=>$this->bill->offsetvnpay("1",$_POST['timkiem']),
            "page"=>"vnpayadmin",
            "css"=>"admincss",
            "numpage"=>$this->bill->numpagevnpay()
            ]);
    }
    else
    {
        $this->view('adminview',[
            "data"=>$this->bill->offsetvnpay($i,""),
            "page"=>"vnpayadmin",
            "css"=>"admincss",
            "numpage"=>$this->bill->numpagevnpay()
            ]);
}

    

}
function detailorder($i=1)
{
  

    if(isset($_POST['timkiem']))
    {
        $this->view('adminview',[
            "data"=>$this->detailbill->offset("1",$_POST['timkiem']),
            "page"=>"detailorderadmin",
            "css"=>"admincss",
            "numpage"=>$this->detailbill->numpage()
            ]);
    }
    else
    {
        $this->view('adminview',[
            "data"=>$this->detailbill->offset($i,""),
            "page"=>"detailorderadmin",
            "css"=>"admincss",
            "numpage"=>$this->detailbill->numpage()
            ]);
}
    

}
function contact()
{
    $this->view('adminview',[
        "data"=>$this->contact->offset(),
        "page"=>"contactadmin",
        "css"=>"admincss",
        "numpage"=>$this->contact->numpage()
        ]);
}
function phanquyen($i=1)
{
    if(isset($_POST['timkiem']))
    {
        $this->view('adminview',[
            "data"=>$this->user->offset1("1",$_POST['timkiem']),
            "page"=>"peradmin",
            "css"=>"admincss",
            "numpage"=>$this->user->numpage1()
            ]);
    }
    else
    {
        $this->view('adminview',[
            "data"=>$this->user->offset1($i,""),
            "page"=>"peradmin",
            "css"=>"admincss",
            "numpage"=>$this->user->numpage1()
            ]);
}

}
function category()
{
    $this->view('adminview',[
        "data"=>$this->category->offset(),
        "page"=>"categoryadmin",
        "css"=>"admincss",
        ]);
}
function couple()
{
    $this->view('adminview',[
        "data"=>$this->couple->offset(),
        "page"=>"coupleadmin",
        "css"=>"admincss",
        ]);
}
function addproduct()
{
      if(isset($_POST['themsanpham']))
      {
        if (isset($_POST['ten']) && !empty($_POST['ten']) && isset($_POST['loai']) && !empty($_POST['loai']) && isset($_POST['gia']) && !empty($_POST['gia']) && isset($_POST['message']) && !empty($_POST['message']) && isset($_FILES['image']) && !empty($_FILES['image'])) {

            $ten = $_POST['ten'];
            $loai = $_POST['loai'];
            $gia = $_POST['gia'];
            $message = $_POST['message'];
            $path = "./public/img/";
            $tmp_name = $_FILES['image']['tmp_name'];
            $anh = $_FILES['image']['name'];
            move_uploaded_file($tmp_name, $path . $anh);
           
            $this->var->themsanpham($ten, $gia, $anh, $message, $loai);
          } else {
            echo '<script language="javascript">';
            echo 'alert("Bạn chưa nhập thông tin")';
            echo '</script>';
          }
     
      }



    $this->view('adminview',[
        "page"=>"addproduct",
        "loai"=>$this->var->loai(),
        "css"=>"addproduct"
        ]);
}
function deleteproduct($i="")
{
  $this->var->xoa($i);
  header("Location:http://localhost/MVC_DOAN/Admin/index");
}
function addnews()
{
    if(isset($_POST['submit'])){
        if(isset($_POST['ten'])&&!empty($_POST['ten'])&&isset($_POST['message'])&&!empty($_POST['message'])&&isset($_FILES['image'])&&!empty($_FILES['image']))
        {
           
           $ten=$_POST['ten'];
           $message=$_POST['message'] ;
           $path = "./public/img/";
           $tmp_name = $_FILES['image']['tmp_name'];
           $anh = $_FILES['image']['name'];
           move_uploaded_file($tmp_name,$path.$anh);
          $this->news->themtintuc($ten,$anh,$message);
       
        }
        else{
          echo '<script language="javascript">';
          echo 'alert("bạn chưa nhập đủ thông tin !")';
          echo '</script>';
        }
      }
    $this->view('adminview',[
        "page"=>"addnews",
        "css"=>"addnews"
        ]);
}
function deletenews($i="")
{
$this->news->xoatintuc($i);

header("Location:http://localhost/MVC_DOAN/Admin/news");
}
function addcouple()
{


    if(isset($_POST['submit'])){
        if(isset($_POST['magg'])&&!empty($_POST['magg'])&&isset($_POST['tengg'])&&!empty($_POST['tengg'])&&isset($_POST['ptgg'])&&!empty($_POST['ptgg'])&&isset($_POST['ghichugg'])&&!empty($_POST['ghichugg']))
        {
           
           $magg=$_POST['magg'];
           $tengg=$_POST['tengg'] ;
           $ptgg=$_POST['ptgg'] ;
           $ngaybatdau=$_POST['ngaybatdau'] ;
           $ngayketthuc=$_POST['ngayketthuc'] ;
           $ghichugg=$_POST['ghichugg'] ;
           $path = "./public/img";
           $tmp_name = $_FILES['image']['tmp_name'];
           $anh = $_FILES['image']['name'];
           move_uploaded_file($tmp_name, $path . $anh);
          $this->couple->themmgg($magg,$tengg,$ngaybatdau,$ngayketthuc,$ptgg,$ghichugg,$anh);
        
        }
        else{
         echo '<script language="javascript">';
         echo 'alert("bạn chưa nhập đủ thông tin !")';
         echo '</script>';
      
        }
      }


    $this->view('adminview',[
        "page"=>"addcouple",
        "css"=>"addcouple"
        ]);
}
function addcontact($i="")
{ 
  if (isset($_POST['submit'])) {
    if (isset($_POST['idlh']) && !empty($_POST['idlh']) && isset($_POST['facebook']) && !empty($_POST['facebook']) && isset($_POST['sodienthoai']) && !empty($_POST['sodienthoai']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['diachi']) && !empty($_POST['diachi']) && isset($_POST['dieukhoan']) && !empty($_POST['dieukhoan'])&& isset($_POST['bando']) && !empty($_POST['bando'])) {
      $idlh = $_POST['idlh'];
      $facebook = $_POST['facebook'];
      $sodienthoai = $_POST['sodienthoai'];
      $email = $_POST['email'];
      $diachi = $_POST['diachi'];
      $dieukhoan = $_POST['dieukhoan'];
      $bando = $_POST['bando'];
      $this->contact->update_lienhe($diachi, $sodienthoai, $email, $facebook, $dieukhoan, $idlh,$bando);
      header("Location:http://localhost/MVC_DOAN/Admin/contact");
    } else {
      echo '<script language="javascript">';
      echo 'alert("bạn chưa nhập đủ thông tin !")';
      echo '</script>';
    }
  }
  
    $this->view('adminview',[
        "page"=>"addcontact",
        "data"=>$this->contact->laylienheid($i),
        "css"=>"addcontact"
        ]);
}
function editcategory($i="")
{
    if(isset($_POST['submit'])){
        if(isset($_POST['tendanhmuc'])&&!empty($_POST['tendanhmuc']))
        {
           
           $tendanhmuc=$_POST['tendanhmuc'];
           $id=$_POST['id'];
           $noidungdm=$_POST['noidungdanhmuc'];
         $rrrt=$this->category->suadanhmuc($id,$tendanhmuc,$noidungdm);
         header("Location:http://localhost/MVC_DOAN/Admin/category");
        }
        else{
         echo '<script language="javascript">';
         echo 'alert("bạn chưa nhập đủ thông tin !")';
         echo '</script>';
      
        }
      }


    $this->view('adminview',[
        "page"=>"editcategory",
        "data"=>$this->category->laydanhmuc($i),
        "css"=>"editcategory"
        ]);
}

function editproduct($i="")
{
    if(isset($_POST['sanpham']))
    {
        if(isset($_POST['ten'])&&!empty($_POST['ten'])&&isset($_POST['loai'])&&!empty($_POST['loai'])&&isset($_POST['gia'])&&!empty($_POST['gia'])&&isset($_POST['message'])&&!empty($_POST['message'])&&isset($_FILES['image'])&&!empty($_FILES['image']))
  {
   
     $ten=$_POST['ten'];
     echo $ten;
     $loai=$_POST['loai'] ;
     echo $loai;
     $gia=$_POST['gia'] ;
     echo $gia;
     $masp=$_POST['masp'];
     $message=$_POST['message'] ;
     echo $message;
    $anh=$_FILES['image']['name'];

 if($anh!=null)
 {
  $path = "./public/img/";
  $tmp_name = $_FILES['image']['tmp_name'];
  $anh = $_FILES['image']['name'];
  move_uploaded_file($tmp_name,$path.$anh);
					$ktt=$this->var->layanh($anh,$masp);
                    
					header('Location:http://localhost/MVC_DOAN/Admin/index');
 }
 

  $kp=$this->var->update($masp,$ten,$gia,$message);
  
  print_r($kp);
  echo $i;
  $k=$this->var->updateloai($loai,$masp);
  $error="Thêm sản phẩm thành công";
  header('Location:http://localhost/MVC_DOAN/Admin/index');
  }
  else{
    echo '<script language="javascript">';
    echo 'alert("bạn chưa nhập đủ thông tin !")';
    echo '</script>';
  }
    }

    $this->view('adminview',[
        "page"=>"editproduct",
        "id"=>$this->var->sanphamid($i),
        "loai"=>$this->var->loai(),
        "css"=>"editproduct"
        ]);

}
function editcouple($i="")
{
    if(isset($_POST['submit'])){
        if(isset($_POST['magg'])&&!empty($_POST['magg'])&&isset($_POST['tengg'])&&!empty($_POST['tengg'])&&isset($_POST['ptgg'])&&!empty($_POST['ptgg'])&&isset($_POST['ghichugg'])&&!empty($_POST['ghichugg']))
        {
           
           $magg=$_POST['magg'];
           $tengg=$_POST['tengg'] ;
           $ptgg=$_POST['ptgg'] ;
           $ngaybatdau=$_POST['ngaybatdau'] ;
           $ngayketthuc=$_POST['ngayketthuc'] ;
           $ghichugg=$_POST['ghichugg'] ;
           $path ="./public/img/";
           $tmp_name = $_FILES['image']['tmp_name'];
           $anh = $_FILES['image']['name'];
           $id=$_POST['idsp'];
           if($anh!=null)
       {
        $path = "./public/img/";
        $tmp_name = $_FILES['image']['tmp_name'];
        $anh = $_FILES['image']['name'];
        move_uploaded_file($tmp_name,$path.$anh);
                          $ktt=$this->couple->layanhgg($anh,$id);
       }
       $this->couple->tatkn();
       $this->couple->capnhatmagg($id,$magg,$tengg,$ngaybatdau,$ngayketthuc,$ptgg,$ghichugg);
          header("Location:http://localhost/MVC_DOAN/Admin/couple");
          
        }
        else{
         echo '<script language="javascript">';
         echo 'alert("bạn chưa nhập đủ thông tin !")';
         echo '</script>';
      
        }
      }
    $this->view('adminview',[
        "page"=>"editcouple",
        "data"=>$this->couple->hienmagiamgiaid($i),
        "css"=>"editcouple"
        ]);
  
}
function deletecouple($i="")
{
  $this->couple->xoagiamgia($i);
  header("Location:http://localhost/MVC_DOAN/Admin/couple");

}
function statuscouple($i="",$y="")
{
  if($i==1){
      $z=0;
      $rt=$this->couple->ttgg($y,$z);
      header("Location:http://localhost/MVC_DOAN/Admin/couple");
  }else
  {
    $z=1;
    $rt=$this->couple->ttgg($i,$z);
    header("Location:http://localhost/MVC_DOAN/Admin/couple");
  }
  


}
function editnews($i="")
{
       
;

       
    $this->view('adminview',[
        "page"=>"editnews",
       
        "css"=>"editnews"
        ]);
  
  
}
function statusorder($i="",$y="")
{

  $abz=$this->couple->tatkn();
  if($y==1)
  {
    $g=0;
  $abxx=$this->bill->updateduyet($i,$g);
  
  $zsd=$this->couple->batkn();
  header("Location:http://localhost/MVC_DOAN/Admin/order");
  }else{
    $g=1;
   $abxx=$this->bill->updateduyet($i,$g);
   $zsd=$this->couple->batkn();
   header("Location:http://localhost/MVC_DOAN/Admin/order");
  }

}
function statusper($i="",$y="")
{
  echo $i;
  echo $y;
  if($y==1)

  {
   $y=2 ;
  $this->user->updatequyen($i,$y);
  header("Location:http://localhost/MVC_DOAN/Admin/phanquyen");
  }else
  {
    $y=1;
    $this->user->updatequyen($i,$y);
    header("Location:http://localhost/MVC_DOAN/Admin/phanquyen");
  }
}
function Logout()
{
  unset($_SESSION['admin']);
  header("Location:http://localhost/MVC_DOAN/Home/index");
}
}

?>