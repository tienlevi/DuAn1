<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./CSS/index.css" />
<link rel="stylesheet" href="./CSS/header.css" />
<link rel="stylesheet" href="./CSS/content.css" />
<link rel="stylesheet" href="./CSS/footer.css" />
<link rel="stylesheet" href="./CSS/form.css" />
<link rel="stylesheet" href="./CSS/thongtin.css" />


<?php
session_start();
if(!isset($_SESSION["user"])){
    echo "Bạn không có quyền truy cập vào trang này";
    die;
}
if(isset($_POST["dangxuat"])){
    unset($_SESSION["user"]);
    header("Location: ../client/index.php");
} 
if(isset($_SESSION["user"])){
    extract($_SESSION['user']);
    if($trangthai === 1){
        echo "Bạn đã bị khóa tài khoản vui lòng liên hệ admin để khôi phục lại tài khoản của bạn";
        echo "<form action='' method='post'>
        <input type='submit' name='dangxuat' value='Quay lại trang chủ và đăng xuất'/>
    </form>";
        die;
    }
}

include "../model/pdo.php";
include "../model/taikhoan.php";
include "header.php";
if(isset($_GET['act']) && $_GET['act'] != ""){
    $act = $_GET['act'];
    switch ($act) {
        case "thongtin":
            if(isset($_GET['id'])&&$_GET['id']>0){
                $taikhoan = loadone_taikhoan($id);
            }
            include "view/thongtin.php";
            break;
        case "doimk":
            if(isset($_GET['id'])&&$_GET['id']>0){
                $taikhoan = loadone_taikhoan($id);
                $laymatkhau = laymatkhau($id);
            }
            
            include "view/doimk.php";
            break;
        case "thaydoithongtin":
            if(isset($_GET['id'])&&$_GET['id']>0){
                $taikhoan = loadone_taikhoan($_GET['id']);
            }
            if(isset($_POST['suathongtin']) && $_POST['suathongtin']){
                $id = $_POST['id'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                update_taikhoan($id,$email,$diachi,$sdt);
            }
            include "view/update.php";
            break;
            default:
            if(isset($_GET['id'])&&$_GET['id']>0){
                $taikhoan = loadone_taikhoan($id);
            }
            include "home.php";
            break;
        } 
        
    } else {
        if(isset($_GET['id'])&&$_GET['id']>0){
            $taikhoan = loadone_taikhoan($id);
        }
        include "home.php";
    }
    include "footer.php";
    

?>
<div class="back-to-top"><i class="fa-solid fa-arrow-up"></i></div>
<script src="./JS/script.js"></script>