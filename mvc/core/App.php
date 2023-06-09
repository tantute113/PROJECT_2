<?php



class App{

    private $_controller,$_action ,$_param ; 


function __construct()
{
    global $router ;
    if(!empty($router['default']))
    {
        $this->_controller=$router['default'] ;
    }
 
    $this->_action=$router['action'] ; 
    $this->_param=[] ;
    $url= $this->handleUrl() ;
    
}

 function getUrl()
 {
if(!empty($_SERVER['PATH_INFO'])){
$url=$_SERVER['PATH_INFO'] ;
 }else
 {
     $url ="/" ;
 }
 return $url ;

}

public function handleUrl()
{
$url=$this->getUrl() ;

$urlArray=array_filter(explode("/",$url)) ;
$urlArray=array_values($urlArray) ;

if(!empty($urlArray[0]))
{
    $array_controller=$urlArray[0]."Controller";
  
    $this->_controller=ucfirst($array_controller)  ;
}else{

    $this->_controller=$this->_controller ;
}



if(file_exists("./mvc/controller/".$this->_controller.".php"))
require_once "./mvc/controller/".$this->_controller.".php";
$this->_controller= $this->_controller ;
unset($urlArray[0]) ;
if(!empty($urlArray[1]))
{
    $this->_action=$urlArray[1] ;
    unset($urlArray[1]) ;

}
else{
    $this->_action=$this->_action ;

}
$this->_param=array_values($urlArray) ;
call_user_func_array([new $this->_controller,$this->_action],$this->_param) ;
}
}


?>