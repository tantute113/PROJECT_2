<?php
class CamonController extends Controller
{

function index()
{
    echo "<h1>Cảm ơn bạn đã mua hàng</h1>";
    unset($_SESSION['cart'] );
   
    header( "refresh:3;http://localhost/MVC_DOAN/Home/index" );
}


}














?>