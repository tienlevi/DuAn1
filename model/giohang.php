<?php 

function insert_giohang($iduser,$idpro,$name,$img,$giatien,$soluong,$iddonhang ){
$sql="INSERT into giohang values(null,'$iduser','$idpro','$name','$img','$giatien','$soluong','$iddonhang')";
return pdo_execute($sql);
}

function loadCart($iddonhang){
    $sql = "SELECT * FROM giohang WHERE iddonhang = $iddonhang";
    $giohang = pdo_query($sql);
    return $giohang;
}

function loadHoaDon($iddonhang){
    $sql = "SELECT * FROM giohang WHERE iduser = $iddonhang";
    $giohang = pdo_query($sql);
    return $giohang;
}

function loadHoaDonUser($id){
    $sql = "SELECT giohang.id, giohang.iduser,
    giohang.idpro, giohang.name, giohang.img, giohang.giatien,
    giohang.soluong, giohang.iddonhang, donhang.thoigiandathang, donhang.trangthai FROM giohang
    LEFT JOIN donhang ON donhang.id = giohang.iddonhang WHERE iduser = $id";
    $giohang = pdo_query($sql);
    return $giohang;
}

?>