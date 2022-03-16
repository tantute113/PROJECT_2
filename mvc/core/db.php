<?php
class db{
    protected $conn;
    protected $hostname = 'localhost';
    protected $dbname='doan3';
    protected $user='root';
    protected $pass="";
function __construct()
{
    $this->conn=mysqli_connect($this->hostname,$this->user,$this->pass);
    mysqli_select_db($this->conn,$this->dbname) ;
    mysqli_query($this->conn,"SET NAMES 'utf8'") ;


}

}



?>