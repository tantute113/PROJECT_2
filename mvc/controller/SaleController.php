<?php
class SaleController extends Controller{
   
public $var;
    public $detail;
    function __construct()
{
    $this->detail=$this->model('classSale');
    $this->var=$this->model('testModel');

}
function index(){
    $this->view('indexview',["sv"=>$this->var->sanpham()
    ,"page"=>"sale"
    ,"css"=>"sale"
    ,"seeS"=>$this->detail->seeS(),
    ]);
}

}





?>