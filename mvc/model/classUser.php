<?php


class classUser extends db {

    private  string $Name_tk ;
    private string $Pass_tk;
    private int $Type_tk;
    private string $Gmail_tk;
    private string $Date_tk;
    private string $Address_tk;
    private string $Tel_tk ;
    /**
     * Get the value of Name_tk
     */ 
    public function getGmail_tk()
    {
        return $this->Gmail_tk;
    }

    /**
     * Set the value of Gmail_tk
     *
     * @return  self
     */ 
    public function setGmail_tk($Gmail_tk)
    {
        $this->Gmail_tk = $Gmail_tk;

        return $this;
    }
    public function getName_tk()
    {
        return $this->Name_tk;
    }

    /**
     * Set the value of Name_tk
     *
     * @return  self
     */ 
    public function setName_tk($Name_tk)
    {
        $this->Name_tk = $Name_tk;

        return $this;
    }

    /**
     * Get the value of Pass_tk
     */ 
    public function getPass_tk()
    {
        return $this->Pass_tk;
    }

    /**
     * Set the value of Pass_tk
     *
     * @return  self
     */ 
    public function setPass_tk($Pass_tk)
    {
        $this->Pass_tk = $Pass_tk;

        return $this;
    }

    /**
     * Set the value of Type_tk
     *
     * @return  self
     */ 
    

    /**
     * Get the value of Type_tk
     */ 
   

    /**
     * Get the value of Date_tk
     */ 
    public function getDate_tk()
    {
        return $this->Date_tk;
    }

    /**
     * Set the value of Date_tk
     *
     * @return  self
     */ 
    public function setDate_tk($Date_tk)
    {
        $this->Date_tk = $Date_tk;

        return $this;
    }

    /**
     * Get the value of Address_tk
     */ 
    public function getAddress_tk()
    {
        return $this->Address_tk;
    }

    /**
     * Set the value of Address_tk
     *
     * @return  self
     */ 
    public function setAddress_tk($Address_tk)
    {
        $this->Address_tk = $Address_tk;

        return $this;
    }
    
    /**
     * Get the value of Type_tk
     */ 
    public function getType_tk()
    {
        return $this->Type_tk;
    }

    /**
     * Set the value of Type_tk
     *
     * @return  self
     */ 
    public function setType_tk($Type_tk)
    {
        $this->Type_tk = $Type_tk;

        return $this;
    }

    /**
     * Get the value of Tel_tk
     */ 
    public function getTel_tk()
    {
        return $this->Tel_tk;
    }

    /**
     * Set the value of Tel_tk
     *
     * @return  self
     */ 
    public function setTel_tk($Tel_tk)
    {
        $this->Tel_tk = $Tel_tk;

        return $this;
    }





   public function Compare($name)
    {
        $oj=new self();
     $oj->setName_tk($name);
               $sql="SELECT * FROM `taikhoan` WHERE taikhoan.TK_TEN = '{$oj->getName_tk()}';";
               $resuft=mysqli_query($this->conn,$sql);
               $XT=mysqli_num_rows($resuft);
               return $XT;
              
    }
    public function Getname($name)
    {


        $oj=new self();
     $oj->setName_tk($name);
               $sql="SELECT * FROM `taikhoan` WHERE taikhoan.TK_TEN = '{$oj->getName_tk()}';";
               $resuft=mysqli_query($this->conn,$sql);
               $array=[];
               foreach($resuft as $row){
                   $object =new self()  ;
                   $object->setTel_tk($row['TK_TEN']);
                   $object->setPass_tk($row['TK_MATKHAU']); 
                   $object->setType_tk($row['LOAI_MA']) ; 
                 $array[] =$object ;
               }
               return $array;
              

    }
    public function Insert($username,$hashed_password,$date,$gmail,$address,$tel)
    {
        $object= new self();
        $object->setName_tk($username);
        $object->setPass_tk($hashed_password);
        $object->setDate_tk($date);
        $object->setGmail_tk($gmail);
        $object->setAddress_tk($address);
        $object->setTel_tk($tel);
     $sql="INSERT INTO `taikhoan` (`TK_TEN`, `TK_MATKHAU`, `LOAI_MA`, `TK_DATE`,`TK_GMAIL`, `TK_DIAC`, `TK_SDT`) VALUES ('{$object->getName_tk()}', '{$object->getPass_tk()}', '2', '{$object->getDate_tk()}','{$object->getGmail_tk()}', '{$object->getAddress_tk()}', '{$object->getTel_tk()}');";
     $resuft=mysqli_query($this->conn,$sql);
    
    }


    public function numpage($timkiem="")
    {
        
        $sotintuc="SELECT count(*) FROM khachhang where KH_TEN like '%$timkiem%'; ";
        $mangsotintuc=mysqli_query($this->conn,$sotintuc) ;
        $ketquasotintuc=mysqli_fetch_array($mangsotintuc) ;
        $sotintuc=$ketquasotintuc['count(*)'] ;
        $sotintuctren1trang=10;
        $sotrang =ceil($sotintuc/$sotintuctren1trang) ;

        return $sotrang ;
    }
    public function offset($trang=1,$timkiem="")
    {
        $boqua=10*($trang-1);
        $sql ="SELECT * FROM khachhang where KH_TEN like '%$timkiem%' limit 10 offset $boqua;" ;
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




    public function numpage1($timkiem="")
    {
        
        $sotintuc="SELECT count(*) FROM taikhoan,loaitaikhoan where taikhoan.LOAI_MA=loaitaikhoan.LOAI_MA and TK_TEN like '%$timkiem%'; ";
         $mangsotintuc=mysqli_query($this->conn,$sotintuc) ;
         $ketquasotintuc=mysqli_fetch_array($mangsotintuc) ;
         $sotintuc=$ketquasotintuc['count(*)'] ;
         $sotintuctren1trang=6;
         $sotrang =ceil($sotintuc/$sotintuctren1trang) ;
        return $sotrang ;
    }
    public function offset1($trang=1,$timkiem="")
    {
        $boqua=6*($trang-1);
  $sql ="SELECT * FROM taikhoan,loaitaikhoan where taikhoan.LOAI_MA=loaitaikhoan.LOAI_MA and TK_TEN like '%$timkiem%' limit 6 offset $boqua;" ;
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



function updatequyen($ten,$ma)
{
   $sql="UPDATE `taikhoan` SET `LOAI_MA` = '$ma' WHERE `taikhoan`.`TK_TEN` = '$ten';";
   return mysqli_query($this->conn,$sql);
}

function kiemtraemail($email)
{
    $sql="SELECT * FROM `taikhoan` WHERE taikhoan.TK_GMAIL='$email';";
    $kt= mysqli_query($this->conn,$sql);
    $rt=mysqli_num_rows($kt);
    return $rt;

}
function updatepass($pass,$email)
{
    $sql="UPDATE `taikhoan` SET `TK_MATKHAU` = '$pass' WHERE `taikhoan`.`TK_GMAIL`='$email';";
    return mysqli_query($this->conn,$sql);
}




    /**
     * Get the value of Gmail_tk
     */ 
   
}
?>