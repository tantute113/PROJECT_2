<?php 
class DetailproductController extends Controller{
   
    function __construct()
    {
        $this->var=$this->model('classProduct');
        $this->var1=$this->model('classCategory');
    
    }
function index($i="")
{

  $this->view("detailproductview",["data"=>$this->var->sanphamid($i),"css"=>"detailproduct"]);
}


}













?>