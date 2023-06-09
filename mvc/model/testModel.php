<?php
class testModel extends db {
    public function getSV()
    {
        return "pham chi tan";
    }
    public function tong($a,$b){
        return $a +$b ;
    }
    public function sanpham()
    {  $sql="SELECT * FROM SANPHAM";
        return mysqli_query($this->conn,$sql);
      
    }
}


?>