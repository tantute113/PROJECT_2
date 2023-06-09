
<?php


class classDetailorder extends db{

    private int $ma_cthd ;
    private int $ma_hd ;
    private int $ma_sp;
    private int $price_cthd;
    private int $soluong_cthd ;

    /**
     * Get the value of ma_cthd
     */ 
    public function getMa_cthd()
    {
        return $this->ma_cthd;
    }

    /**
     * Set the value of ma_cthd
     *
     * @return  self
     */ 
    public function setMa_cthd($ma_cthd)
    {
        $this->ma_cthd = $ma_cthd;

        return $this;
    }

    /**
     * Get the value of ma_hd
     */ 
    public function getMa_hd()
    {
        return $this->ma_hd;
    }

    /**
     * Set the value of ma_hd
     *
     * @return  self
     */ 
    public function setMa_hd($ma_hd)
    {
        $this->ma_hd = $ma_hd;

        return $this;
    }

    /**
     * Get the value of ma_sp
     */ 
    public function getMa_sp()
    {
        return $this->ma_sp;
    }

    /**
     * Set the value of ma_sp
     *
     * @return  self
     */ 
    public function setMa_sp($ma_sp)
    {
        $this->ma_sp = $ma_sp;

        return $this;
    }

    /**
     * Get the value of price_cthd
     */ 
    public function getPrice_cthd()
    {
        return $this->price_cthd;
    }

    /**
     * Set the value of price_cthd
     *
     * @return  self
     */ 
    public function setPrice_cthd($price_cthd)
    {
        $this->price_cthd = $price_cthd;

        return $this;
    }

    /**
     * Get the value of soluong_cthd
     */ 
    public function getSoluong_cthd()
    {
        return $this->soluong_cthd;
    }

    /**
     * Set the value of soluong_cthd
     *
     * @return  self
     */ 
    public function setSoluong_cthd($soluong_cthd)
    {
        $this->soluong_cthd = $soluong_cthd;

        return $this;
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
    public function offset($trang=1,$timkiem="")
    {
        $boqua=12*($trang-1);
  $sql ="SELECT * FROM sanpham,chitiethoadon,hoadon where sanpham.SP_MA =chitiethoadon.SP_MA and hoadon.HD_MA =chitiethoadon.HD_MA and SP_TEN like '%$timkiem%' limit 12 offset $boqua;" ;
        
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

}

















?>