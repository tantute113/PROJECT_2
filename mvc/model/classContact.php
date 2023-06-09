<?php 
class classContact extends db{

private int $Id_lh ;
private string $Address_lh ; 
private string $Tel_lh;
private string $Email_lh ;
private string $Face_lh ;
private string $Rule_lh;
private string $Map_lh;


/**
 * Get the value of Id_lh
 */ 
public function getId_lh()
{
return $this->Id_lh;
}

/**
 * Set the value of Id_lh
 *
 * @return  self
 */ 
public function setId_lh($Id_lh)
{
$this->Id_lh = $Id_lh;

return $this;
}

/**
 * Get the value of Address_lh
 */ 
public function getAddress_lh()
{
return $this->Address_lh;
}

/**
 * Set the value of Address_lh
 *
 * @return  self
 */ 
public function setAddress_lh($Address_lh)
{
$this->Address_lh = $Address_lh;

return $this;
}

/**
 * Get the value of Tel_lh
 */ 
public function getTel_lh()
{
return $this->Tel_lh;
}

/**
 * Set the value of Tel_lh
 *
 * @return  self
 */ 
public function setTel_lh($Tel_lh)
{
$this->Tel_lh = $Tel_lh;

return $this;
}

/**
 * Get the value of Email_lh
 */ 
public function getEmail_lh()
{
return $this->Email_lh;
}

/**
 * Set the value of Email_lh
 *
 * @return  self
 */ 
public function setEmail_lh($Email_lh)
{
$this->Email_lh = $Email_lh;

return $this;
}

/**
 * Get the value of Face_lh
 */ 
public function getFace_lh()
{
return $this->Face_lh;
}

/**
 * Set the value of Face_lh
 *
 * @return  self
 */ 
public function setFace_lh($Face_lh)
{
$this->Face_lh = $Face_lh;

return $this;
}

/**
 * Get the value of Rule_lh
 */ 
public function getRule_lh()
{
return $this->Rule_lh;
}

/**
 * Set the value of Rule_lh
 *
 * @return  self
 */ 
public function setRule_lh($Rule_lh)
{
$this->Rule_lh = $Rule_lh;

return $this;
}

/**
 * Get the value of Map_lh
 */ 
public function getMap_lh()
{
return $this->Map_lh;
}

/**
 * Set the value of Map_lh
 *
 * @return  self
 */ 
public function setMap_lh($Map_lh)
{
$this->Map_lh = $Map_lh;

return $this;
}

public function contact() 
{
    $sql="SELECT * FROM `lienhe`;";
    $resuft=mysqli_query($this->conn,$sql);
 $array=[];
 foreach($resuft as $row){
     $object =new self()  ;
     $object->setId_lh($row['LH_MA']);
     $object->setAddress_lh($row['LH_DIACHI']); 
     $object->setTel_lh($row['LH_SDT']) ; 
     $object->setEmail_lh($row['LH_EMAIL']) ;
$object->setFace_lh($row['LH_FACE']);  
$object->setRule_lh($row['LH_DIEUKHOAN']);  
$object->setMap_lh($row['LH_BANDO']) ;
$array[] =$object ;
 }
 return $array;

}


public function numpage($timkiem="")
{
    
    $sotintuc="SELECT count(*) FROM sanpham,chitiethoadon,hoadon where  sanpham.SP_MA =chitiethoadon.SP_MA and  hoadon.HD_MA =chitiethoadon.HD_MA and SP_TEN like '%$timkiem%'; ";
     $mangsotintuc=mysqli_query($this->conn,$sotintuc) ;
     $ketquasotintuc=mysqli_fetch_array($mangsotintuc) ;
     $sotintuc=$ketquasotintuc['count(*)'] ;
     $sotintuctren1trang=12;
     $sotrang =ceil($sotintuc/$sotintuctren1trang) ;
    return $sotrang ;
}
public function offset()
{
    $sql = "SELECT * FROM lienhe ;";
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

function laylienheid($idlh)
{
    $sql = "SELECT * FROM lienhe where LH_MA =$idlh ;";
    return mysqli_query($this->conn, $sql);
}

function update_lienhe($diachi, $sodienthoai, $email, $facebook, $dieukhoan, $idlienhe,$bando)
{
    $sql = "UPDATE `lienhe` SET `LH_DIACHI` = '$diachi', `LH_SDT` = '$sodienthoai', `LH_EMAIL` = '$email', `LH_FACE` = '$facebook', `LH_DIEUKHOAN` = '$dieukhoan', `LH_BANDO` = '$bando' WHERE `lienhe`.`LH_MA` = $idlienhe;";
    return mysqli_query($this->conn, $sql);
}
}












?>