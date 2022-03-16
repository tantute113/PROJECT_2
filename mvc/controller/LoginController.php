<?php 
class LoginController extends Controller{
public $var ;
function __construct()
{
    $this->var=$this->model('testModel');

}
function index()
{
    $this->view('loginview',["sv"=>$this->var->sanpham(),"page"=>"login","css"=>"login"]);
}
 function show(){
    echo "ShowhomeC";
 }


}


?>