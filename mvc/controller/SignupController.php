<?php 
class SignupController extends Controller{
public $var ;
function __construct()
{
    $this->var=$this->model('testModel');

}
function index()
{
    $this->view('signupview',["sv"=>$this->var->sanpham(),"page"=>"signup","css"=>"signup"]);
}
 function show(){
    echo "ShowhomeC";
 }


}


?>