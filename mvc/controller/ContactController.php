<?php 
class ContactController extends Controller {
    public $var ;
    function __construct()
{
    $this->var=$this->model('testModel');

}
function index(){
    $this->view('indexview',["sv"=>$this->var->sanpham()

    ,"page"=>"contact"
    ,"css"=>"contact"
    
    ]);
}
}



?>