<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./CSS/index.css" />
<link rel="stylesheet" href="./CSS/header.css" />
<link rel="stylesheet" href="./CSS/content.css" />
<link rel="stylesheet" href="./CSS/footer.css" />
<link rel="stylesheet" href="./CSS/form.css" />
<link rel="stylesheet" href="./CSS/giohang.css" />
<link rel="stylesheet" href="./CSS/thanhtoan.css" />
<link rel="stylesheet" href="./CSS/timkiem.css" />
<link rel="stylesheet" href="./CSS/sanpham.css" />


<?php
session_start();
include "../model/pdo.php";
include "../model/taikhoan.php";
include "../model/sanpham.php";
include "../model/danhmuc.php";
include "header.php";
if(!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}

if(isset($_GET['act']) && $_GET['act'] != ""){
    $act = $_GET['act'];
    switch ($act) {
        case "dangnhap":
            if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                $user = $_POST['username'];
                $pass = $_POST['password'];
                $checkuser = checkuser($user,$pass);
                if(is_array($checkuser)){
                    $_SESSION['user'] = $checkuser;
                    header('location: index.php');
                }else{
                    $thongbao="tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký";
                }
            }
            include "dangnhap.php";
            break;
        case "dangky":
            if(isset($_POST['dangky']) && $_POST['dangky']){
                $user = $_POST['username'];
                $pass = $_POST['password'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $diachi = $_POST['diachi'];
                $trangthai = 0;
                insert_taikhoan($user,$pass,$email,$diachi,$sdt,$trangthai);
            }
            include "view/dangky.php";
            break;
        case "sanphamct":
            if(isset($_GET['id'])&&$_GET['id']>0){
                $sanpham = loadOneSp($_GET['id']);
            }
            include "view/chitietsanpham.php";
            break;
        case "giohang":
            if(isset($_POST['addtocart']) && $_POST['addtocart']){
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $giatien = $_POST['giatien'];
                $soluong = 1;
                $tien = $soluong * $giatien;
                $giohang = [$id,$name,$img,$giatien,$tien];
                array_push($_SESSION['mycart'],$giohang);
            }
            include "view/giohang.php";
            break;
        case "deletecart":
            if(isset($_GET['id'])){
                array_splice($_SESSION['mycart'],$_GET['id'],1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header("Location: index.php?act=giohang");
            break;
        case "vewebsite":
            include "view/vewebsite.php";
            break;
        case "thanhtoan":
            // if(isset($_GET['id'])&&$_GET['id']>0){
            //     $sanpham = loadOneSp($_GET['id']);
            // }
            include "view/thanhtoan.php";
            break;
        case "tatcasp":
            $listsanpham = loadAllSp();
            include "view/tatcasp.php";
            break;
        case "timkiem":
            if(isset($_POST['kyw']) && ($_POST['kyw'] != "")){
                $kym = $_POST['kyw'];
            } else {
                $kym = "";
            }
            if(isset($_GET['iddm']) && ($_GET['iddm']) > 0){
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadAllSpFilter("",$iddm);
            $listsanpham = loadAllSpFilter($kym,$iddm);
            $listdanhmuc = loadAllDm();
            include "view/timkiem.php";
            break;
        case "timkiemdm":
            if(isset($_GET['iddm']) && ($_GET['iddm']) > 0){
                $iddm = $_GET['iddm'];
                $danhmuc = loadOneDm($_GET['iddm']);
            } else {
                $iddm = 0;
            }
            $listsanpham = loadAllSpFilter("",$iddm);
            include "view/timkiemdm.php";
            break;
        default:
        $listsanpham = loadAllSp();
        $topsp = topSp();
        $spkhac = spKhac();
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
    $topsp = topSp();
    $spkhac = spKhac();
    $listdanhmuc = loadAllDm();
    $listsanpham = loadAllSp($kym,$iddm);
    include "home.php";
}
include "footer.php";

?>
<div class="back-to-top"><i class="fa-solid fa-arrow-up"></i></div>
<script src="./JS/script.js"></script>