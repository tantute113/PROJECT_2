<?php

class HomeController extends Controller{
public $var ;
function __construct()
{
    $this->var=$this->model('classProduct');

}
function index()
{
    $this->view('indexview',[
        "sanphamnoibat"=>$this->var->sanphamnoibat() 
,     
        "page"=>"homeview"
,"css"=>"homeview"


]);
}
 function show(){
    echo "ShowhomeC";
 }


}


?>