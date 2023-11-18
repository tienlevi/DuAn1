<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./CSS/index.css" />
<link rel="stylesheet" href="./CSS/header.css" />
<link rel="stylesheet" href="./CSS/slider.css" />
<link rel="stylesheet" href="./CSS/content.css" />
<link rel="stylesheet" href="./CSS/footer.css" />
<link rel="stylesheet" href="./CSS/form.css" />
<link rel="stylesheet" href="./CSS/giohang.css" />
<link rel="stylesheet" href="./CSS/thanhtoan.css" />
<link rel="stylesheet" href="./CSS/timkiem.css" />


<?php
session_start();
include "../model/pdo.php";
include "../model/taikhoan.php";
include "../admin/sanpham.php";
include "../admin/danhmuc.php";
include "header.php";
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
            include "view/giohang.php";
            break;
        case "vewebsite":
            include "view/vewebsite.php";
            break;
        case "thanhtoan":
            include "view/thanhtoan.php";
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
            $dssp = loadAllSp("",$iddm);
            $listsanpham = loadAllSp($kym,$iddm);
            $listdanhmuc = loadAllDm();
            include "view/timkiem.php";
            break;
        default:
        if(isset($_POST['listok']) && ($_POST['listok'])){
            $kym = $_POST['kym'];
            $iddm = $_POST['iddm'];
        } else {
            $kym = "";
            $iddm = 0;
        };
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
    $listdanhmuc = loadAllDm();
    $listsanpham = loadAllSp($kym,$iddm);
    include "home.php";
}
include "footer.php";

?>
<div class="back-to-top"><i class="fa-solid fa-arrow-up"></i></div>
<script type="text/javascript" src="./JS/swiper.js"></script>
<script src="./JS/script.js"></script>