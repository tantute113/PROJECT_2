<?php 
class DetailsaleController extends Controller{
   
    function __construct()
    {
        $this->detail1=$this->model('classSale');
    
    }
function index($i="")
{

  $this->view("aboutSale",["data"=>$this->detail1->saleid($i)]);
}


}