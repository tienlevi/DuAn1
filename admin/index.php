<link rel="stylesheet" href="./CSS/header.css">
<link rel="stylesheet" href="./CSS/footer.css">
<link rel="stylesheet" href="./CSS/home.css">
<link rel="stylesheet" href="./CSS/add.css">
<link rel="stylesheet" href="./CSS/aside.css">
<link rel="stylesheet" href="./CSS/edit.css">
<link rel="stylesheet" href="./CSS/list.css">
<link rel="stylesheet" href="./CSS/thongke.css">
<link rel="stylesheet" href="./CSS/index.css">
<link rel="stylesheet" href="./CSS/chitietsp.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<?php
session_start();
if(!isset($_SESSION["admin"])){
   echo "Ban khong co quyen truy cap trang nay";
   die;
}
echo $_SESSION["admin"];
if(isset($_POST["dangxuat"])){
    unset($_SESSION["admin"]);
    header("Location: ../client/index.php");
}
include "header.php";
include "../model/pdo.php";
include "../model/thongke.php";
include "../model/binhluan.php";
include "../model/taikhoan.php";
include "sanpham.php";
include "danhmuc.php";
include "khachhang.php";
include "donhang.php";
include "tinhtong.php";
include "test.php";
if(isset($_GET['act']) && $_GET['act'] != ""){
    $act = $_GET['act'];
    switch ($act) {
        case "editsp":
            if(isset($_GET['id'])&&$_GET['id']>0){
                $sanpham = loadOneSp($_GET['id']);
            }
            if(isset($_POST['sua']) && $_POST['sua']){
                $id = $_POST['id'];
                $name = $_POST['name'];
                $giatien = $_POST['giatien'];
                $mota = $_POST['mota'];
                $iddm = $_POST['iddm'];
                $soluong = $_POST['soluong'];
                $luotxem = $_POST['luotxem'];
                $trangthai = $_POST['trangthai'];
                $thuonghieu = $_POST['thuonghieu'];
                $mucgiamgia = $_POST['mucgiamgia'];
                $target = "../Img/";
                $img = $_FILES["img"]["name"];
                $target_file = $target.basename($_FILES["img"]["name"]);
                move_uploaded_file($_FILES["img"]["tmp_name"],$target_file);
                editSp($id,$name,$giatien,$img,$mota,$iddm,$soluong,$luotxem,$trangthai,$thuonghieu,$mucgiamgia);
            }
            $listdanhmuc = loadAllDm();
            include "sanpham/edit.php";
            break;
        case "addsp":
            if(isset($_POST['them']) && $_POST['them']){
                $id = $_POST['id'];
                $name = $_POST['name'];
                $giatien = $_POST['giatien'];
                $mota = $_POST['mota'];
                $iddm = $_POST['iddm'];
                $soluong = $_POST['soluong'];
                $luotxem = $_POST['luotxem'];
                $ngaytao = date('h:i:sa d/m/Y');
                $trangthai = $_POST['trangthai'];
                $thuonghieu = $_POST['thuonghieu'];
                $mucgiamgia = $_POST['mucgiamgia'];
                $target = "../Img/";
                $img = $_FILES["img"]["name"];
                $target_file = $target.basename($_FILES["img"]["name"]);
                move_uploaded_file($_FILES["img"]["tmp_name"],$target_file);
                addSp($name,$giatien,$img,$mota,$iddm,$soluong,$luotxem,$ngaytao,$trangthai,$thuonghieu,$mucgiamgia);
            }
            $listdanhmuc = loadAllDm();
            $listsanpham = loadAllSp("",0);
            include "sanpham/add.php";
            break;
        case "deletesp":
            if(isset($_GET['id']) && ($_GET['id'] > 0)){
                deleteSp($_GET['id']);
            }
            $listsanpham = loadAllSp("",0);
            include "sanpham/list.php";
            break;
        case "listsp":
            if(isset($_POST['listok']) && ($_POST['listok'])){
                $kym = $_POST['kym'];
                $iddm = $_POST['iddm'];
            } else {
                $kym = "";
                $iddm = 0;
            };
            $listdanhmuc = loadAllDm();
            $listsanpham = loadAllSp($kym,$iddm);
            include "sanpham/list.php";
            break;
        case "chitietsp":
            if(isset($_GET['id'])&&$_GET['id']>0){
                $sanpham = loadOneSp($_GET['id']);
            }
            $listdanhmuc = loadAllDm();
            include "sanpham/chitiet.php";
            // include "sanpham/binhluanform.php";
            break;
        case "editdm":
            if(isset($_GET['id'])&&$_GET['id']>0){
                $danhmuc = loadOneDm($_GET['id']);
            }
            if(isset($_POST['sua']) && $_POST['sua']){
                $id = $_POST['id'];
                $name = $_POST['name'];
                editDm($id,$name);
            }
            include "danhmuc/edit.php";
            break;
        case "adddm":
            if(isset($_POST['them']) && $_POST['them']){
                $id = $_POST['id'];
                $name = $_POST['name'];
                $target = "./danhmuc/Image/";
                $img = $_FILES["img"]["name"];
                $target_file = $target.basename($_FILES["img"]["name"]);
                move_uploaded_file($_FILES["img"]["tmp_name"],$target_file);
                addDm($name,$img);
            }
            include "danhmuc/add.php";
            break;
        case "deletedm":
            if(isset($_GET['id']) && ($_GET['id'] > 0)){
                deleteDm($_GET['id']);
            }
            $listdanhmuc = loadAllDm("",0);
            include "danhmuc/list.php";
            break;
        case "listdm":
            $listdanhmuc = loadAllDm();
            include "danhmuc/list.php";
            break;
        case "listtk":
            $listtk = loadAllTk(); 
            include "taikhoan/list.php";
            break;
        case "khoatk":
            if(isset($_GET['id']) && ($_GET['id'] > 0)){
                khoaTk($_GET['id']);
            }
            include "taikhoan/list.php";
            break;
        case "molaitk":
            if(isset($_GET['id']) && ($_GET['id'] > 0)){
                molaiTk($_GET['id']);
            }
            include "taikhoan/list.php";
            break;
        case "thongke": 
            $listthongke = loadAllThongKe();
            include "thongke/thongke.php";
            break;
        case "donhang":
            $listdonhang = loadAllDonHang();
            include "donhang/list.php";
            break;
        case "chitietdonhang":
            if(isset($_GET['id'])&&$_GET['id']>0){
                $donhang = loadOneDonHang($_GET['id']);
            }
            include "donhang/chitiet.php";
            break;
        default:
            if(isset($_POST['listok']) && ($_POST['listok'])){
                $kym = $_POST['kym'];
                $iddm = $_POST['iddm'];
            } else {
                $kym = "";
                $iddm = 0;
            };
            $tongdm = tinhtongdm();
            $tongsp = tinhtongsp();
            $tongkhachhang = tinhtongkhachhang();
            $listdanhmuc = loadAllDm();
            $listsanpham = loadAllSp($kym,$iddm);
            include "home.php";
            break;
    } 
} else {
        if(isset($_POST['listok']) && ($_POST['listok'])){
            $kym = $_POST['kym'];
            $iddm = $_POST['iddm'];
        } else {
            $kym = "";
            $iddm = 0;
        };
        $tongdm = tinhtongdm();
        $tongsp = tinhtongsp();
        $tongkhachhang = tinhtongkhachhang();
        $listdanhmuc = loadAllDm();
        $listsanpham = loadAllSp($kym,$iddm);
        include "home.php";
}
include "footer.php";
?>
<script src="./JS/script.js"></script>