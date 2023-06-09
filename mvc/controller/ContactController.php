<?php 
class ContactController extends Controller {
    public $var ;
    function __construct()
{
    $this->var=$this->model('classContact');

}
function index(){
    $this->view('indexview',[
        "contact"=>$this->var->contact()
    ,"page"=>"contact"
    ,"css"=>"contact"
    
    ]);
}
}



?>