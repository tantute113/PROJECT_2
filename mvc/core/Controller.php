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

}


?>