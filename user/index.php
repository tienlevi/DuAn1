<link rel="stylesheet" href="./CSS/header.css">
<link rel="stylesheet" href="./CSS/footer.css">
<link rel="stylesheet" href="./CSS/home.css">
<link rel="stylesheet" href="./CSS/aside.css">
<link rel="stylesheet" href="./CSS/index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<?php
// session_start();
// if(!isset($_SESSION["user"])){
//    echo "Ban khong co quyen truy cap trang nay";
//    die;
// }
// echo $_SESSION["user"];
// if(isset($_POST["dangxuat"])){
//     unset($_SESSION["user"]);
//     header("Location: ../client/index.php");
// }
include "header.php";
if(isset($_GET['act']) && $_GET['act'] != ""){
    $act = $_GET['act'];
    switch ($act) {
        default:
            include "home.php";
            break;
    } 
} else {
        include "home.php";
}
include "footer.php";
?>
<script src="./JS/script.js"></script>