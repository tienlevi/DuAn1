<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="./CSS/header.css" />
<link rel="stylesheet" href="./CSS/slider.css" />
<link rel="stylesheet" href="./CSS/content.css" />
<link rel="stylesheet" href="./CSS/footer.css" />
<link rel="stylesheet" href="./CSS/form.css" />
<link rel="stylesheet" href="./CSS/sanpham.css" />


<style>
* {
    margin: 0;
    padding: 0;
    font-family: "Open Sans", sans-serif;
    font-weight: 400;
    box-sizing: border-box;
}

body {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

html {
    scroll-behavior: smooth;
}

.back-to-top {
    display: flex;
    align-items: center;
    justify-content: center;
    position: fixed;
    right: 20px;
    bottom: 20px;
    width: 50px;
    height: 50px;
    background-color: #fff;
    border-radius: 50%;
    cursor: pointer;
    opacity: 0;
    box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.15);
}

.active {
    opacity: 1;
}
</style>

<?php
include "header.php";
if(isset($_GET['act']) && $_GET['act'] != ""){
    $act = $_GET['act'];
    switch ($act) {
        case "dangnhap":
            include "dangnhap/dangnhap.php";
            break;
        case "dangky":
            include "dangky/dangky.php";
            break;
            case "sanpham":
                include "chitietsanpham/sanpham.php";
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
<script type="text/javascript" src="./JS/swiper.js"></script>
<div class="back-to-top"><i class="fa-solid fa-arrow-up"></i></div>

<script src="./JS/script.js"></script>