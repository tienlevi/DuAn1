<?php
function loadAllTk(){
    $sql = "SELECT * FROM khachhang";
    $listtk = pdo_query($sql);
    pdo_query($sql);
    return $listtk;
}

function khoaTk($id){
    $sql = "UPDATE khachhang SET trangthai = 1 WHERE id = $id";
    pdo_execute($sql);
    header("location: index.php?act=listtk");
}

function molaiTk($id){
    $sql = "UPDATE khachhang SET trangthai = 0 WHERE id = $id";
    pdo_execute($sql);
    header("location: index.php?act=listtk");
}
?>