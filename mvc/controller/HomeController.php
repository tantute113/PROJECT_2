<?php

class HomeController extends Controller{
public $var ;
function __construct()
{
    $this->var=$this->model('testModel');

}
function index()
{
    $this->view('indexview',["sv"=>$this->var->sanpham()

,"page"=>"homeview"
,"css"=>"homeview"


]);
}
 function show(){
    echo "ShowhomeC";
 }


}


?>