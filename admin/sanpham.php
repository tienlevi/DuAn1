<?php
function loadAllDm(){
    $sql = "SELECT * FROM danhmuc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function loadAllSp($kym,$iddm){
    $sql = "SELECT * FROM sanpham";
    if($kym != ""){
       $sql.= " and name like '%".$kym."%'"; 
    }
    if($iddm > 0){
        $sql.= " and iddm ='".$iddm."'"; 
    }
    // $sql.= " order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadOneSp($id){
    $sql = "SELECT * FROM sanpham WHERE id = $id";
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}

// function loadDmCungLoai($iddm){
//     $sql = "SELECT * FROM danhmuc WHERE id='$iddm'";
//     $dm = pdo_query_one($sql);
//     extract($dm);
//     return $name;
// }

// function loadSpCungloai($id,$iddm){
//     $sql = "SELECT * FROM sanpham WHERE iddm='$iddm' AND id <> ".$id;
//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }

function editSp($id,$name,$giatien,$img,$mota,$iddm,$soluong,$luotxem,$trangthai,$thuonghieu,$mucgiamgia){
    $sql = "UPDATE sanpham set name='$name',giatien='$giatien',img='$img',mota='$mota',iddm='$iddm',soluong='$soluong',luotxem='$luotxem',trangthai='$trangthai',thuonghieu='$thuonghieu',mucgiamgia='$mucgiamgia' WHERE id = $id";
    pdo_execute($sql);
    header("location: index.php?act=listsp");
}

function addSp($name,$giatien,$img,$mota,$iddm,$soluong,$luotxem,$ngaytao,$trangthai,$thuonghieu,$mucgiamgia){
    $sql = "INSERT INTO sanpham VALUES(null,'$name','$giatien','$img','$mota','$iddm','$soluong','$luotxem','$ngaytao','$trangthai','$thuonghieu','$mucgiamgia')";
    pdo_execute($sql);
    header("location: index.php?act=listsp");   
}

function deleteSp($id){
    $sql = "DELETE FROM sanpham WHERE id ='$id'";
    pdo_execute($sql);    
}
?>