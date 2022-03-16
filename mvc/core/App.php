<?php
class App{
    protected $controller='Home';
    protected $action='index';
    protected $param=[];
    function __construct()
    {
         $test=$this->Urltrim();
         $test1=$test[0].'Controller';
       if(file_exists("./mvc/controller/".$test1.".php"))
       {
     $this->controller=ucfirst($test1);
    
     unset($test[0]);
       }
       
       require "./mvc/controller/".ucfirst($this->controller).".php";
     

       if(isset($test[1])){
           if(method_exists($this->controller,$test[1])){
  $this->action=$test[1];
           }
           unset($test[1]);
       }
      

       $this->param=$test?array_values($test):[];
    
call_user_func_array([new $this->controller,$this->action],$this->param);

    }
    function Urltrim(){
        if(isset($_GET['url']))
        {
           return explode('/',filter_var(trim($_GET['url'],'/')));
   
        }
    }
}



?>