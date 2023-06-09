<?php  

class classProduct extends db {
    

    private int $Ma_sp;
    private String $Ten_sp;
    private String $Gia_sp;
    private String $Mota_sp;
    private String $Hinh_sp ;
    private int $Dm_sp;

    /**
     * Get the value of Ma_sp
     */
    public function getMa_sp()
    {
        return $this->Ma_sp;
    }

    /**
     * Set the value of Ma_sp
     *
     * @return  self
     */ 
    public function setMa_sp($Ma_sp)
    {
        $this->Ma_sp = $Ma_sp;

        return $this;
    }

    /**
     * Get the value of Ten_sp
     */ 
    public function getTen_sp()
    {
        return $this->Ten_sp;
    }

    /**
     * Set the value of Ten_sp
     *
     * @return  self
     */ 
    public function setTen_sp($Ten_sp)
    {
        $this->Ten_sp = $Ten_sp;

        return $this;
    }

    /**
     * Get the value of Gia_sp
     */ 
    public function getGia_sp()
    {
        return $this->Gia_sp;
    }

    /**
     * Set the value of Gia_sp
     *
     * @return  self
     */ 
    public function setGia_sp($Gia_sp)
    {
        $this->Gia_sp = $Gia_sp;

        return $this;
    }

    /**
     * Get the value of Mota_sp
     */ 
    public function getMota_sp()
    {
        return $this->Mota_sp;
    }

    /**
     * Set the value of Mota_sp
     *
     * @return  self
     */ 
    public function setMota_sp($Mota_sp)
    {
        $this->Mota_sp = $Mota_sp;

        return $this;
    }

    /**
     * Get the value of Dm_sp
     */ 
    public function getDm_sp()
    {
        return $this->Dm_sp;
    }

    /**
     * Set the value of Dm_sp
     *
     * @return  self
     */ 
    public function setDm_sp($Dm_sp)
    {
        $this->Dm_sp = $Dm_sp;

        return $this;
    }
     public function getHinh_sp()
    {
        return $this->Hinh_sp;
    }

    /**
     * Set the value of Hinh_sp
     *
     * @return  self
     */ 
    public function setHinh_sp($Hinh_sp)
    {
        $this->Hinh_sp = $Hinh_sp;

        return $this;
    }
    public function productid($id)
    {  
        $sql=  "SELECT * FROM `sanpham` WHERE sanpham.SP_MA='$id'";
         
        $resuft=mysqli_query($this->conn,$sql);
        return $resuft ;
    }
   public function product(){
    $sql="SELECT * FROM SANPHAM";
     $resuft=mysqli_query($this->conn,$sql);
    $array=[];
    foreach($resuft as $row){
        $object =new self()  ;
        $object->setMa_sp($row['SP_MA']);
        $object->setTen_sp($row['SP_TEN']); 
        $object->setGia_sp($row['SP_GIA']) ; 
        $object->setMota_sp($row['SP_MOTA']) ;
$object->setHinh_sp($row['SP_ANH']);  
  $array[] =$object ;
    }
  
    return $array  ;

   }
  
 public function tra() 
   {
       $sql="SELECT * FROM `sanpham` WHERE DM_MA ='1';";
       $resuft=mysqli_query($this->conn,$sql);
    $array=[];
    foreach($resuft as $row){
        $object =new self()  ;
        $object->setMa_sp($row['SP_MA']);
        $object->setTen_sp($row['SP_TEN']); 
        $object->setGia_sp($row['SP_GIA']) ; 
        $object->setMota_sp($row['SP_MOTA']) ;
$object->setHinh_sp($row['SP_ANH']);  
  $array[] =$object ;
    }
    return $array;

   }
   public function detox() 
   {
       $sql="SELECT * FROM `sanpham` WHERE DM_MA ='2';";
       $resuft=mysqli_query($this->conn,$sql);
    $array=[];
    foreach($resuft as $row){
        $object =new self()  ;
        $object->setMa_sp($row['SP_MA']);
        $object->setTen_sp($row['SP_TEN']); 
        $object->setGia_sp($row['SP_GIA']) ; 
        $object->setMota_sp($row['SP_MOTA']) ;
$object->setHinh_sp($row['SP_ANH']);  
  $array[] =$object ;
    }
    return $array;

   }
   public function thucduong() 
   {
       $sql="SELECT * FROM `sanpham` WHERE DM_MA ='3';";
       $resuft=mysqli_query($this->conn,$sql);
    $array=[];
    foreach($resuft as $row){
        $object =new self()  ;
        $object->setMa_sp($row['SP_MA']);
        $object->setTen_sp($row['SP_TEN']); 
        $object->setGia_sp($row['SP_GIA']) ; 
        $object->setMota_sp($row['SP_MOTA']) ;
$object->setHinh_sp($row['SP_ANH']);  
  $array[] =$object ;
    }
    return $array;

   }

   public function nuocuongkhac() 
   {
       $sql="SELECT * FROM `sanpham` WHERE DM_MA ='4';";
       $resuft=mysqli_query($this->conn,$sql);
    $array=[];
    foreach($resuft as $row){
        $object =new self()  ;
        $object->setMa_sp($row['SP_MA']);
        $object->setTen_sp($row['SP_TEN']); 
        $object->setGia_sp($row['SP_GIA']) ; 
        $object->setMota_sp($row['SP_MOTA']) ;
$object->setHinh_sp($row['SP_ANH']);  
  $array[] =$object ;
    }
    return $array;

   }
   public function monanvat() 
   {
       $sql="SELECT * FROM `sanpham` WHERE DM_MA ='5';";
       $resuft=mysqli_query($this->conn,$sql);
    $array=[];
    foreach($resuft as $row){
        $object =new self()  ;
        $object->setMa_sp($row['SP_MA']);
        $object->setTen_sp($row['SP_TEN']); 
        $object->setGia_sp($row['SP_GIA']) ; 
        $object->setMota_sp($row['SP_MOTA']) ;
$object->setHinh_sp($row['SP_ANH']);  
  $array[] =$object ;
    }
    return $array;

   }

   public function sanphamnoibat() 
   {
    $sql="SELECT * FROM `sanpham`ORDER BY SP_MA ASC LIMIT 8;";
       $resuft=mysqli_query($this->conn,$sql);
    $array=[];
    foreach($resuft as $row){
        $object =new self()  ;
        $object->setMa_sp($row['SP_MA']);
        $object->setTen_sp($row['SP_TEN']); 
        $object->setGia_sp($row['SP_GIA']) ; 
        $object->setMota_sp($row['SP_MOTA']) ;
$object->setHinh_sp($row['SP_ANH']);  
  $array[] =$object ;
    }
    return $array;

   }
  public function numpage($timkiem="")
  {
      
      $sotintuc="SELECT count(*) FROM sanpham where SP_TEN like '%$timkiem%'; ";
         $mangsotintuc=mysqli_query($this->conn,$sotintuc) ;
         $ketquasotintuc=mysqli_fetch_array($mangsotintuc) ;
         $sotintuc=$ketquasotintuc['count(*)'] ;
         $sotintuctren1trang=5;
      /*  return */   $sotrang =ceil($sotintuc/$sotintuctren1trang) ;
      return $sotrang ;
  }
  public function offset($trang=1,$timkiem="")
  {
    $boqua=5*($trang-1);
    $sql ="SELECT * FROM sanpham where SP_TEN like '%$timkiem%' limit 5 offset $boqua;";
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

  function themsanpham($ten, $gia, $hinhanh, $noidung, $idloai)
{
    $sql = "INSERT INTO `sanpham` (`SP_MA`, `SP_TEN`, `SP_GIA`, `SP_ANH`, `SP_MOTA`, `DM_MA`) VALUES (NULL, '$ten', '$gia', '$hinhanh', '$noidung', '$idloai');";
    return mysqli_query($this->conn, $sql);
}
function loai()
{
    $sql = "SELECT * FROM danhmuc ;";
    return mysqli_query($this->conn, $sql);
}
function sanphamid($id)
{
    $sql = "SELECT * FROM sanpham where SP_MA='$id';";
    return mysqli_query($this->conn, $sql);
}
function layanh($anh, $id)
{
    $sql = "update sanpham set SP_ANH = '$anh' where SP_MA ='$id'";
    return mysqli_query($this->conn, $sql);
}
function update($idsp, $tensp, $giasp, $thongsokt)
{
    $sql = "UPDATE `sanpham` SET `SP_TEN` = '$tensp', `SP_GIA` = '$giasp',`SP_MOTA` = '$thongsokt' WHERE `SP_MA` = '$idsp';";
    return mysqli_query($this->conn, $sql);
}
function updateloai($idloai, $idsp)
{
    $sql = "UPDATE `sanpham` SET `DM_MA` = '$idloai' WHERE `sanpham`.`SP_MA` = $idsp;";
    return mysqli_query($this->conn, $sql);
}
function xoa($idsp)
{
    $sql = "DELETE FROM `sanpham` WHERE `sanpham`.`SP_MA` = '$idsp'";
    return mysqli_query($this->conn, $sql);
}
}

?>