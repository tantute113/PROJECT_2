<?php
class ProductController extends Controller{
    public $var ;
    public $var1; 
    public $var2; 
    function __construct()
{
    $this->var=$this->model('classProduct');
    $this->var1=$this->model('classCategory');

}
function index(){
    $this->view('indexview',["array"=>$this->var->product()
    ,"danhmucdau"=>$this->var1->caterogy_header()
    ,"danhmuccuoi"=>$this->var1->caterogy_footer() 
    ,"tra"=>$this->var->tra() 
    ,"detox"=>$this->var->detox()
    ,"thucduong"=>$this->var->thucduong()
    ,"nuocuongkhac"=>$this->var->nuocuongkhac()
    ,"monanvat"=>$this->var->monanvat()
    ,"page"=>"product"
    ,"css"=>"product"
    
    
    ]);
}

}





?>