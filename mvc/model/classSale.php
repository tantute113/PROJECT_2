<?php

class classSale extends db
{
    private String $Ma_GG;
    private String $Ten_gg;
    private String $Gia_pt;
    private String $Gg_bd;
    private String $Gg_kt;
    private String $Hinh_gg;
    private String $Gg_gc;
    private int $Tt_matt;

    /**
     * Get the value of Ma_
     */
    public function getMa_gg()
    {
        return $this->Ma_GG;
    }

    /**
     * Set the value of Ma_
     *
     * @return  self
     */
    public function setMa_gg($Ma_GG)
    {
        $this->Ma_GG = $Ma_GG;

        return $this;
    }

    /**
     * Get the value of Ten_
     */
    public function getTen_gg()
    {
        return $this->Ten_gg;
    }

    /**
     * Set the value of Ten_
     *
     * @return  self
     */
    public function setTen_gg($Ten_gg)
    {
        $this->Ten_gg = $Ten_gg;

        return $this;
    }

    /**
     * Get the value of Gia_
     */
    public function getGia_pt()
    {
        return $this->Gia_pt;
    }

    /**
     * Set the value of Gia_
     *
     * @return  self
     */
    public function setGia_pt($Gia_pt)
    {
        $this->Gia_pt = $Gia_pt;

        return $this;
    }

    /**
     * Get the value of Mota_
     */
    public function getGg_bd()
    {
        return $this->Gg_bd;
    }

    /**
     * Set the value of Mota_
     *
     * @return  self
     */
    public function setGg_bd($Gg_bd)
    {
        $this->Gg_bd = $Gg_bd;

        return $this;
    }

    /**
     * Get the value of Dm_
     */
    public function getGg_kt()
    {
        return $this->Gg_kt;
    }

    /**
     * Set the value of Dm_sp
     *
     * @return  self
     */
    public function setGg_kt($Gg_kt)
    {
        $this->Gg_kt = $Gg_kt;

        return $this;
    }
    public function getHinh_gg()
    {
        return $this->Hinh_gg;
    }

    /**
     * Set the value of Hinh_
     *
     * @return  self
     */
    public function setHinh_gg($Hinh_gg)
    {
        $this->Hinh_gg = $Hinh_gg;

        return $this;
    }

    public function getGg_gc()
    {
        return $this->Gg_gc;
    }

    /**
     * Set the value of Hinh_
     *
     * @return  self
     */
    public function setGg_gc($Gg_gc)
    {
        $this->Gg_gc = $Gg_gc;

        return $this;
    }
    public function getTt_ma_tt()
    {
        return $this->Tt_matt;
    }

    /**
     * Set the value of Hinh_
     *
     * @return  self
     */
    public function setTt_ma_tt($Tt_matt)
    {
        $this->Tt_matt = $Tt_matt;

        return $this;
    }
    public function saleid($id)
    {
        $sql =  "SELECT * FROM `magiamgia` WHERE magiamgia.GG_MA='$id'";

        $resuft = mysqli_query($this->conn, $sql);
        return $resuft;
    }
    public function seeS()
    {
        $sql = "SELECT * FROM MAGIAMGIA ";
        $resuft = mysqli_query($this->conn, $sql);
        $array = [];
        foreach ($resuft as $row) {
            $object = new self();
            $object->setMa_gg($row['GG_MA']);
            $object->setTen_gg($row['GG_TEN']);
            $object->setGia_pt($row['GG_PHANTRAM']);
            $object->setGg_bd($row['GG_BATDAU']);
            $object->setHinh_gg($row['GG_ANH']);
            $object->setGg_kt($row['GG_KETHUC']);
            $object->setTt_ma_tt($row['TT_MATT']);
            $array[] = $object;
        }

        return $array;
    }
    // function themmgg( $Ten_gg,$Gia_pt,$Gg_bd,$Hinh_gg,$Gg_kt,$Gg_gc,$Tt_matt )
    // {   
    //     $sql = "INSERT INTO `magiamgia` (`GG_MA`, `GG_TEN`, `GG_PHANTRAM`, `GG_BATDAU`, `GG_KETHUC`,`GG_GHICHU`,`GG_ANH`,`TT_MATT` ) VALUES (NULL, '$Ten_gg', '$Gia_pt', '$Gg_bd', '$Gg_kt','$Gg_gc', '$Hinh_gg','$Tt_matt');";
    //     return mysqli_query($this->conn, $sql);
    // }
    // function xemggid($id)
    // {
    //     $sql = "SELECT * FROM magiamgia where GG_MA='$id';";
    //     return mysqli_query($this->conn, $sql);
    // }
    
    // function xoamgg($idgg)
    // {
    //     $sql = "DELETE FROM `magiamgia` WHERE `magiamgia`.`GG_MA` = '$idgg'";
    //     return mysqli_query($this->conn, $sql);
    // }
}
