<link rel="stylesheet" href="../CSS/header.css">
<link rel="stylesheet" href="../CSS/footer.css">
<link rel="stylesheet" href="../CSS/home.css">
<link rel="stylesheet" href="../CSS/add.css">
<link rel="stylesheet" href="../CSS/aside.css">
<link rel="stylesheet" href="../CSS/edit.css">
<link rel="stylesheet" href="../CSS/list.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<style>
* {
    margin: 0;
    padding: 0;
    font-family: "Source Sans Pro", -apple-system, BlinkMacSystemFont, "Segoe UI",
        Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
        "Segoe UI Emoji", "Segoe UI Symbol";
    font-weight: 400;
    box-sizing: border-box;
}

body {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}
</style>
<?php
include "header.php";
if(isset($_GET['act']) && $_GET['act'] != ""){
    $act = $_GET['act'];
    switch ($act) {
        case "editsp":
            include "sanpham/edit.php";
            break;
        case "addsp":
            include "sanpham/add.php";
            break;
        case "deletesp":
            include "sanpham/list.php";
            break;
        case "listsp":
            include "sanpham/list.php";
            break;
        case "editdm":
            include "danhmuc/edit.php";
            break;
        case "adddm":
            include "danhmuc/add.php";
            break;
        case "deletedm":
            include "danhmuc/list.php";
            break;
        case "listdm":
            include "danhmuc/list.php";
            break;
        case "listtk":
            include "taikhoan/list.php";
            break;
        case "deletetk":
            include "taikhoan/list.php";
            break;
        case "thongke": 
            include "thongke/list.php";
            break;
        case "bieudo":
            include "thongke/bieudo.php";
            break;
        case "binhluan":
            include "binhluan/list.php";
            break;
        default:
            include "home.php";
            break;
    } 
} else {
    include "home.php";
}
include "footer.php";
?>
<script src="../JS/chart.js"></script>
<script src="../JS/script.js"></script>