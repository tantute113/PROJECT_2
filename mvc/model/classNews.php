<?php
class classNews extends db
{ 
    private int $id_tt;
    private string $img_tt;
    private string $name_tt ;
    private string $content_tt ;
    


    /**
     * Get the value of id_tt
     */ 
    public function getId_tt()
    {
        return $this->id_tt;
    }

    /**
     * Set the value of id_tt
     *
     * @return  self
     */ 
    public function setId_tt($id_tt)
    {
        $this->id_tt = $id_tt;

        return $this;
    }

    /**
     * Get the value of img_tt
     */ 
    public function getImg_tt()
    {
        return $this->img_tt;
    }

    /**
     * Set the value of img_tt
     *
     * @return  self
     */ 
    public function setImg_tt($img_tt)
    {
        $this->img_tt = $img_tt;

        return $this;
    }

    /**
     * Get the value of name_tt
     */ 
    public function getName_tt()
    {
        return $this->name_tt;
    }

    /**
     * Set the value of name_tt
     *
     * @return  self
     */ 
    public function setName_tt($name_tt)
    {
        $this->name_tt = $name_tt;

        return $this;
    }

    /**
     * Get the value of content_tt
     */ 
    public function getContent_tt()
    {
        return $this->content_tt;
    }

    /**
     * Set the value of content_tt
     *
     * @return  self
     */ 
    public function setContent_tt($content_tt)
    {
        $this->content_tt = $content_tt;

        return $this;
    }
    public function numpage($timkiem="")
    {
        
        $sotintuc = "SELECT count(*) FROM tintuc where TT_TEN like '%$timkiem%'; ";
        $mangsotintuc = mysqli_query($this->conn, $sotintuc);
        $ketquasotintuc = mysqli_fetch_array($mangsotintuc);
        $sotintuc = $ketquasotintuc['count(*)'];
        $sotintuctren1trang = 5;
        $sotrang = ceil($sotintuc / $sotintuctren1trang);
        return $sotrang ;
    }
    public function offset($trang=1,$timkiem="")
    {
        $boqua = 5 * ($trang - 1);
        $sql = "SELECT * FROM tintuc where TT_TEN like '%$timkiem%' limit 5  offset $boqua;";
        
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
    function themtintuc($ten, $anh, $noidung)
{
    $sql = "INSERT INTO `tintuc` (`TT_MA`, `TT_TEN`, `TT_HINHANH`, `TT_NOIDUNG`) VALUES (NULL, '$ten', '$anh', '$noidung');";
    return mysqli_query($this->conn, $sql);
}

function laytintuctheoid($idtt)
{
    $sql = "SELECT * FROM `tintuc` WHERE TT_MA =$idtt;";
    return mysqli_query($this->conn, $sql);
}
function xoatintuc($idtt)
{
    $sql = "DELETE FROM `tintuc` WHERE `tintuc`.`TT_MA` = $idtt";
    return mysqli_query($this->conn, $sql);
}
}











?>