<?php 
 class classCategory extends db {
  private int $id_dm ;
  private string $name_dm ; 
  private string $link_dm;
  
  /**
   * Get the value of id_dm
   */ 
  public function getId_dm()
  {
    return $this->id_dm;
  }

  /**
   * Set the value of id_dm
   *
   * @return  self
   */ 
  public function setId_dm($id_dm)
  {
    $this->id_dm = $id_dm;

    return $this;
  }

  /**
   * Get the value of name_dm
   */ 
  public function getName_dm()
  {
    return $this->name_dm;
  }

  /**
   * Set the value of name_dm
   *
   * @return  self
   */ 
  public function setName_dm($name_dm)
  {
    $this->name_dm = $name_dm;

    return $this;
  }
  public function getLink_dm()
  {
    return $this->link_dm;
  }

  /**
   * Set the value of link_dm
   *
   * @return  self
   */ 
  public function setLink_dm($link_dm)
  {
    $this->link_dm = $link_dm;

    return $this;
  }

  public function caterogy_header(){
    $sql="SELECT * FROM danhmuc LIMIT 0,1 ;" ; 
    $resuft=mysqli_query($this->conn,$sql);
    $array=[] ; 
    foreach($resuft as $row ){
        $object= new self() ; 
        $object->setId_dm($row['DM_MA']) ; 
        $object->setName_dm($row['DM_TEN']); 
        $object->setLink_dm($row['DM_LINK']);
        $array[]=$object ;
    }
    return $array ;
}
    public function caterogy_footer()
    {
        $sql="SELECT * FROM danhmuc LIMIT 1,20 ;" ;
        $resuft =mysqli_query($this->conn,$sql); 
        $array=[];
foreach($resuft as $row )
{
$object =new self() ; 
$object->setId_dm($row['DM_MA']) ; 
$object->setName_dm($row['DM_TEN']);
$object->setLink_dm($row['DM_LINK']); 

$array[]=$object ; 

}
        return $array ; 

    }
    public function offset()
{
  $sql ="SELECT * FROM danhmuc  ;" ;
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
function laydanhmuc($iddm){
  $sql="SELECT * FROM `danhmuc` WHERE DM_MA = $iddm;";
  return mysqli_query($this->conn,$sql);

}

function suadanhmuc($iddm,$tendm,$motadm){
  $sql="UPDATE `danhmuc` SET `DM_TEN` = '$tendm', `DM_MOTA` = '$motadm' WHERE `danhmuc`.`DM_MA` = $iddm;";
  return mysqli_query($this->conn,$sql);

}

  /**
   * Get the value of link_dm
   */ 
 
}
 




?>