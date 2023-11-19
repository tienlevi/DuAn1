<?php
function loadAllDonHang(){
    $sql = "SELECT * FROM donhang";
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}

function loadOneDonHang($id){
    $sql = "SELECT * FROM donhang WHERE id = $id";
    $donhang = pdo_query_one($sql);
    return $donhang;
}

function huyHang($id){
    $sql = "UPDATE donhang SET trangthai = 1 WHERE id = $id";
    pdo_execute($sql);
    header("location: index.php?act=donhang");
}

?>