<?php

class Controller{

public function model($model)
{
    require "./mvc/model/".$model.".php";
    return new $model ;
}


public function view($views,$data=[])
{
    require "./mvc/views/".$views.".php";

}
public function render($views)
{
    require "./mvc/views/block/".$views.".php";

}
public function mail()
{ 
    require "./mail/sendmail.php";  
}
public function vnpay()
    {
        require "./vnpay_php/index.php";
    }
}


?>