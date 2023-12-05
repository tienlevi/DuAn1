<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./CSS/index.css" />
<link rel="stylesheet" href="./CSS/header.css" />
<link rel="stylesheet" href="./CSS/content.css" />
<link rel="stylesheet" href="./CSS/footer.css" />
<link rel="stylesheet" href="./CSS/form.css" />
<link rel="stylesheet" href="./CSS/giohang.css" />
<link rel="stylesheet" href="./CSS/dathang.css" />
<link rel="stylesheet" href="./CSS/timkiem.css" />
<link rel="stylesheet" href="./CSS/sanpham.css" />


<?php
session_start();
include "../model/pdo.php";
include "../model/taikhoan.php";
include "../model/sanpham.php";
include "../model/danhmuc.php";
include "../model/giohang.php";
include "../model/donhang.php";
if(!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
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
include "header.php";

if(isset($_GET['act']) && $_GET['act'] != ""){
    $act = $_GET['act'];
    switch ($act) {
        case "dangnhap":
            include "dangnhap.php";
            break;
        case "dangky":
            include "dangky.php";
            break;
        case "sanphamct":
            if(isset($_POST['addtocart']) && $_POST['addtocart']){
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $giatien = $_POST['giatien'];
                $soluong = $_POST['soluong'];
                $tien = $soluong * $giatien;
                $giohang = [$id,$name,$img,$giatien,$tien,$soluong];
                if (isset($_SESSION['mycart'])) {
                    $cartItems = $_SESSION['mycart'];
                    $existingItemKey = null;
                    foreach ($cartItems as $key => $item) {
                        if ($item[0] == $id) {
                            $existingItemKey = $key;
                            break;
                        }
                    }
                }  
                if ($existingItemKey !== null) {
                    $cartItems[$existingItemKey][4] += $tien; 
                    $cartItems[$existingItemKey][5] += $soluong; 
                } else {
                    array_push($cartItems, $giohang);
                }  
                $_SESSION['mycart'] = $cartItems;
            }
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
                $soluong = $_POST['soluong'];
                $tien = $soluong * $giatien;
                $giohang = [$id,$name,$img,$giatien,$tien,$soluong];
                if (isset($_SESSION['mycart'])) {
                    $cartItems = $_SESSION['mycart'];
                    $existingItemKey = null;
                    foreach ($cartItems as $key => $item) {
                        if ($item[0] == $id) {
                            $existingItemKey = $key;
                            break;
                        }
                    }
                }  
                if ($existingItemKey !== null) {
                    $cartItems[$existingItemKey][4] += $tien; 
                    $cartItems[$existingItemKey][5] += $soluong; 
                } else {
                    array_push($cartItems, $giohang);
                }  
                $_SESSION['mycart'] = $cartItems;
            }
            if(isset($_POST['tangsoluong']) && $_POST['tangsoluong']) {
                $id = $_POST['id'];
                $cartItems = $_SESSION['mycart'];
                
                // Tìm kiếm sản phẩm trong giỏ hàng
                foreach ($cartItems as $key => $item) {
                    if ($item[0] == $id) {
                        // Tăng số lượng và giá tiền của sản phẩm
                        $cartItems[$key][5]++; 
                        $cartItems[$key][4] += $item[3];
                        break;
                    }
                }
                
                // Lưu giỏ hàng vào session
                $_SESSION['mycart'] = $cartItems;
            }
            
            // Kiểm tra nút "Giảm số lượng" được nhấn
            if(isset($_POST['giamsoluong']) && $_POST['giamsoluong']) {
                $id = $_POST['id'];
                $cartItems = $_SESSION['mycart'];
                
                // Tìm kiếm sản phẩm trong giỏ hàng
                foreach ($cartItems as $key => $item) {
                    if ($item[0] == $id) {
                        // Giảm số lượng và giá tiền của sản phẩm
                        if ($item[5] > 1) {
                            $cartItems[$key][5]--; 
                            $cartItems[$key][4] -= $item[3];
                        }
                        break;
                    }
                }
                
                // Lưu giỏ hàng vào session
                $_SESSION['mycart'] = $cartItems;
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
        case "dathang":
            if(isset($_SESSION["user"]) === []){
                echo "Bạn chưa đăng nhập tài khoản";
                die;
            }
            $donhang = null;
            $giohang = null;
                if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
                    $khachhang=$_POST['khachhang'];
                    $diachi=$_POST['diachi'];
                    $sdt=$_POST['sdt'];
                    $email=$_POST['email'];
                    $phuongthucthanhtoan = $_POST['phuongthucthanhtoan'];
                    $thoigiandathang = date('h:i:sa d/m/Y');
                    $ghichu = $_POST['ghichu'];

                    $iddathang = insert_donhang($khachhang,$diachi,$sdt,$email,$thoigiandathang,$phuongthucthanhtoan,count($_SESSION['mycart']),$ghichu,$_SESSION['user']['id'] );
                    $donhang = loadOneDonHang($iddathang);
                    $giohang = loadCart($iddathang);
                    foreach ($_SESSION['mycart']as $cart ) {
                        insert_giohang($_SESSION['user']['id'],$cart[0],$cart[1],$cart[2],$cart[3],$cart[5],$iddathang);
                    }
                    $_SESSION['mycart'] = [];
                    header("Location: index.php?act=hoadon&iddonhang=$iddathang");
                }
                $donhang = loadHoaDonUser($_SESSION['user']['id']);
                $giohang = loadCart($_SESSION['user']['id']);

                include "view/dathang.php";
            break;
        case "hoadon":
            if(!isset($_SESSION["user"])){
                header("Location: index.php");
            }
            if(isset($_GET['iddonhang']) && ($_GET['iddonhang']) > 0){
                $giohang = loadCart($_GET['iddonhang']);
            }
            $donhang = loadOneDonHang();
            include "view/hoadon.php";
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
<script src="./JS/amount.js">

</script>