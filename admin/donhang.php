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
?>