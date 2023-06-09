<?php 
class classCouple extends db{
 
    private string $name_gg ;
    private int $ma_gg;
    private int $phantram_gg; 
    private string $datestart_gg;
    private string $dateend_gg ;
    private string $note_gg;
    private string $status_gg ;
    

    /**
     * Get the value of name_gg
     */ 
    public function getName_gg()
    {
        return $this->name_gg;
    }

    /**
     * Set the value of name_gg
     *
     * @return  self
     */ 
    public function setName_gg($name_gg)
    {
        $this->name_gg = $name_gg;

        return $this;
    }

    /**
     * Get the value of ma_gg
     */ 
    public function getMa_gg()
    {
        return $this->ma_gg;
    }

    /**
     * Set the value of ma_gg
     *
     * @return  self
     */ 
    public function setMa_gg($ma_gg)
    {
        $this->ma_gg = $ma_gg;

        return $this;
    }

    /**
     * Get the value of phantram_gg
     */ 
    public function getPhantram_gg()
    {
        return $this->phantram_gg;
    }

    /**
     * Set the value of phantram_gg
     *
     * @return  self
     */ 
    public function setPhantram_gg($phantram_gg)
    {
        $this->phantram_gg = $phantram_gg;

        return $this;
    }

    /**
     * Get the value of datestart_gg
     */ 
    public function getDatestart_gg()
    {
        return $this->datestart_gg;
    }

    /**
     * Set the value of datestart_gg
     *
     * @return  self
     */ 
    public function setDatestart_gg($datestart_gg)
    {
        $this->datestart_gg = $datestart_gg;

        return $this;
    }

    /**
     * Get the value of dateend_gg
     */ 
    public function getDateend_gg()
    {
        return $this->dateend_gg;
    }

    /**
     * Set the value of dateend_gg
     *
     * @return  self
     */ 
    public function setDateend_gg($dateend_gg)
    {
        $this->dateend_gg = $dateend_gg;

        return $this;
    }

    /**
     * Get the value of note_gg
     */ 
    public function getNote_gg()
    {
        return $this->note_gg;
    }

    /**
     * Set the value of note_gg
     *
     * @return  self
     */ 
    public function setNote_gg($note_gg)
    {
        $this->note_gg = $note_gg;

        return $this;
    }

    /**
     * Get the value of status_gg
     */ 
    public function getStatus_gg()
    {
        return $this->status_gg;
    }

    /**
     * Set the value of status_gg
     *
     * @return  self
     */ 
    public function setStatus_gg($status_gg)
    {
        $this->status_gg = $status_gg;

        return $this;
    }
    public function offset()
{
    $sql="SELECT * FROM magiamgia;";
    $resuft=mysqli_query($this->conn,$sql);
 
//     $array=[];
//     foreach($resuft as $row){
//         $object =new self()  ;
//         $object->setMa_sp($row['SP_MA']);
//         $object->setTen_sp($row['SP_TEN']); 
//         $object->setGia_sp($row['SP_GIA']) ; 
//         $object->setMota_sp($row['SP_MOTA']) ;
// $object->setHinh_sp($row['SP_ANH']);  
//   $array[] =$object ;
//     }
//     return $array;
return $resuft ;
}
function giamgia($key){
    $sql= "SELECT * FROM `magiamgia` WHERE `GG_MA` = '$key'AND TT_MATT ='1'; ";
    return mysqli_query($this->conn,$sql) ;
}
function themmgg($magg,$tengg,$nbatdau,$nketthuc,$ptgg,$ggghichu,$anh){
    $sql="INSERT INTO `magiamgia` (`GG_MA`, `GG_TEN`, `GG_BATDAU`, `GG_KETHUC`, `GG_PHANTRAM`, `TT_MATT`, `GG_GHICHU`, `GG_ANH`) VALUES ('$magg', '$tengg', '$nbatdau', '$nketthuc', '$ptgg', '0', '$ggghichu', '$anh');";
    return mysqli_query($this->conn,$sql);
}
function layanhgg($anh, $id)
{
    $sql = "UPDATE `magiamgia` SET `GG_ANH` = '$anh' WHERE `magiamgia`.`GG_MA` = '$id';";
    return mysqli_query($this->conn, $sql);
}
function tatkn(){

    $sql="SET GLOBAL FOREIGN_KEY_CHECKS=0;";
    return mysqli_query($this->conn,$sql);

}
function batkn(){

    $sql="SET GLOBAL FOREIGN_KEY_CHECKS=1;";
    return mysqli_query($this->conn,$sql);

}
function capnhatmagg($maggc,$maggm,$tengg,$nbatdau,$nketthuc,$ptgg,$ggghichu){
    $sql="UPDATE `magiamgia` SET `GG_MA` = '$maggm', `GG_TEN` = '$tengg', `GG_BATDAU` = '$nbatdau', `GG_KETHUC` = '$nketthuc', `GG_PHANTRAM` = '$ptgg', `TT_MATT` = '0', `GG_GHICHU` = '$ggghichu' WHERE `magiamgia`.`GG_MA` = '$maggc';";
    return mysqli_query($this->conn,$sql);
}
function hienmagiamgiaid($idgg){
    $sql="SELECT * FROM magiamgia where GG_MA='$idgg';";
    return mysqli_query($this->conn,$sql);
}
function xoagiamgia($idgg){
    $sql="DELETE FROM `magiamgia` WHERE `magiamgia`.`GG_MA` = '$idgg'";
    return mysqli_query($this->conn,$sql);

}

function ttgg($maGG,$mattGG)
{
    $sql="UPDATE `magiamgia` SET `TT_MATT` = '$mattGG' WHERE `magiamgia`.`GG_MA` = '$maGG';";
    return mysqli_query($this->conn,$sql);

}
}











?>