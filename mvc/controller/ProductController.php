<?php
class ProductController extends Controller{
    public $var ;
    function __construct()
{
    $this->var=$this->model('testModel');

}
function index(){
    $this->view('indexview',["sv"=>$this->var->sanpham()

    ,"page"=>"product"
    ,"css"=>"product"
    
    
    ]);
}

}





?>