<?php
class classOrder extends db
{

    private int $id_hd;
    private string $namekh_hd;
    private string $voucher_hd;
 private int $summoney_hd;
 private string $note_hd;
private string $status_hd;
private string $duyet_hd;
 
public function numpage($timkiem="")
{
    
    $sotintuc="SELECT count(*) FROM khachhang,hoadon,trangthai where  khachhang.KH_MA =hoadon.KH_MA and trangthai.TT_MA=hoadon.TT_MA  and KH_TEN like '%$timkiem%'; ";
    $mangsotintuc=mysqli_query($this->conn,$sotintuc) ;
    $ketquasotintuc=mysqli_fetch_array($mangsotintuc) ;
    $sotintuc=$ketquasotintuc['count(*)'] ;
    $sotintuctren1trang=6;
    $sotrang =ceil($sotintuc/$sotintuctren1trang);
    return $sotrang ;
}
public function numpagevnpay($timkiem="")
{
    
    $sotintuc="SELECT count(*) FROM vnpay where HD_MA like '%$timkiem%'; ";
    $mangsotintuc=mysqli_query($this->conn,$sotintuc) ;
    $ketquasotintuc=mysqli_fetch_array($mangsotintuc) ;
    $sotintuc=$ketquasotintuc['count(*)'] ;
    $sotintuctren1trang=6;
    $sotrang =ceil($sotintuc/$sotintuctren1trang);
    return $sotrang ;
}
public function offsetvnpay($trang=1,$timkiem="")
{
    $boqua=6*($trang-1);
    $sql ="SELECT * FROM vnpay where HD_MA like '%$timkiem%' limit 6 offset $boqua;" ;
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
public function offset($trang=1,$timkiem="")
{
    $boqua=6*($trang-1);
    $sql ="SELECT * FROM khachhang,hoadon,trangthai where khachhang.KH_MA =hoadon.KH_MA and trangthai.TT_MA=hoadon.TT_MA and KH_TEN like '%$timkiem%' limit 6 offset $boqua;" ;
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
function updateduyet($idduyet,$idtt){
    $sql="UPDATE `hoadon` SET `TT_MA` = '$idtt' WHERE `hoadon`.`HD_MA` = $idduyet;";
    return mysqli_query($this->conn,$sql);
}
/*=============================pay============= */
public function order($id_hd,$summoney_hd,$date_buy,$namekh_hd,$voucher_hd,$status_hd,$note_hd){
    $sql = "INSERT INTO hoadon VALUES ('$id_hd','$summoney_hd',$date_buy,'$namekh_hd','$voucher_hd','$status_hd','$note_hd')";
    $tam= mysqli_query($this->conn, $sql);
}

function  luudonhang($makh,$tongtien,$ngayxuat,$magg,$ghichu)
{
 
  $sql="INSERT INTO `hoadon` (`HD_MA`, `HD_THANHTIEN`, `HD_NGLAP`, `KH_MA`, `GG_MA`, `TT_MA`, `HD_GHICHU`) VALUES (NULL, '$tongtien', '$ngayxuat', '$makh', '$magg', '0', '$ghichu');";
  return mysqli_query($this->conn, $sql) ;

}

function luuchitietsp($madh,$masp,$soluong,$dongia)
{
 $sql="INSERT INTO `chitiethoadon` (`CTHD_MA`, `HD_MA`, `SP_MA`, `CTHD_DONGIA`, `CTHD_SOLG`) VALUES (NULL, '$madh', '$masp', '$dongia', '$soluong');";
 return mysqli_query($this->conn, $sql) ;
 
}
function laykh($id)
{
   $sql= "SELECT * FROM `taikhoan` WHERE taikhoan.TK_TEN='$id'";
   return mysqli_query($this->conn, $sql) ;
}
function layid()
{

    $idkh=$this->conn->insert_id;
    return $idkh ;
}
function maxhoadon()
{
    $sql="SELECT MAX(hoadon.HD_MA) FROM hoadon;";
    return mysqli_query($this->conn, $sql) ;

}
function luuvnpay($tongtien,$bankcode,$banktran,$cardtype,$orderinfo,$paydate,$tmncode,$transactionno,$madh)
{
 $sql="INSERT INTO `vnpay`(`id_vnpay`, `vnp_amount`, `vnp_bankcode`, `vnp_banktranno`, `vnp_cardtype`, `vnp_orderInfo`, `vnp_paydate`, `vnp_tmncode`, `vnp_transactionno`, `HD_MA`) VALUES ('','$tongtien','$bankcode','$banktran','$cardtype','$orderinfo','$paydate','$tmncode','$transactionno','$madh');";
 return mysqli_query($this->conn, $sql) ;
}
function tatkhoangoai()
{
$sql="SET GLOBAL FOREIGN_KEY_CHECKS=0;";
return mysqli_query($this->conn, $sql) ;
}
function batkhoangoai()
{
$sql="SET GLOBAL FOREIGN_KEY_CHECKS=1;";
return mysqli_query($this->conn, $sql) ;
}
function addkh($ten,$sdt,$diachi)
{

    $sql="INSERT INTO `khachhang` (`KH_MA`, `KH_TEN`, `KH_SDT`, `KH_DCHI`, `LOAI_MA`) VALUES (NULL, '$ten', '$sdt', '$diachi', '2');" ;
    return mysqli_query($this->conn, $sql) ;
}


}






?>