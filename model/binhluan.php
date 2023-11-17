<?php
function loadall_binhluan($idpro)
{
    $sql="SELECT * from binhluan where idpro='$idpro'";
    $listbl = pdo_query($sql);
    return $listbl;
}

function loadAllBl(){
    $sql = "SELECT * FROM binhluan";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}

function loadall_binhluan_admin($idpro = 0) {
    $sql = "SELECT binhluan.*, taikhoan.user as tennguoidung, sanpham.name as tensanpham 
            FROM binhluan 
            INNER JOIN sanpham ON binhluan.idpro = sanpham.id 
            INNER JOIN taikhoan ON binhluan.iduser = taikhoan.id 
            WHERE 1";

    if ($idpro > 1) {
        $sql .= " AND binhluan.idpro='" . $idpro . "'";
    }

    $sql .= " ORDER BY binhluan.id DESC";
    $result = pdo_query($sql);

    return $result;
}

function loadone_binhluan($id)
{
    $sql = "
            SELECT binhluan.id,binhluan.iduser, binhluan.noidung, taikhoan.user, binhluan.ngaybinhluan FROM `binhluan` 
            LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id
            LEFT JOIN sanpham ON binhluan.idpro = sanpham.id
            where binhluan.id = $id;
            ;
        ";
    $result = pdo_query_one($sql);
    return $result;
}

function delete_cmt($id)
{
    $sql = "delete from binhluan where id=" . $id;
    pdo_execute($sql);
}

function delete_cmt_id($id_user, $id_cmt)
{
    echo "ID user: " . $id_user . "    " . $id_cmt;
    echo "<br/>";
    if (isset($id_cmt)) {
        $binhluanone = loadone_binhluan($id_cmt);
        if ($id_cmt == $binhluanone['id']) {
            if ($id_user == $binhluanone['iduser']) {
                delete_cmt($id_cmt);
            }
        }
    }
}

function update_binhluan($id,$noidung){
    $sql="update binhluan set noidung='".$noidung."' where id=".$id;
    pdo_execute($sql);
}


function insert_binhluan($idpro, $iduser, $noidung,$ngaybinhluan)
{
    if (!empty($noidung)) {
        $sql = "INSERT INTO binhluan VALUES(null,'$noidung','$iduser','$idpro','$ngaybinhluan')";
        // echo $sql;
        // die();
        pdo_execute($sql);
    }
}

function delete_binhluan_theo_nhieu_id($dieukhien)
{
    $sql1 = "DELETE FROM binhluan WHERE id in ($dieukhien)";
    pdo_execute($sql1);
}



?>