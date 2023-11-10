<?php
// if(isset($_GET['act']) && $_GET['act'] != ""){
//     $act = $_GET['act'];
//     switch ($act) {
//         case "sp":
//             include "sp.php";
//             break;
//         case "binhluan":
//             include "binhluan.php";
//             break;
//         default:
//             include "list.php";
//             break;
//     } 
// }
?>

<body>
    <div class="row">
        <div class="admin">
            <h1>Quản lý sản phẩm</h1>
        </div>
        <div class="page">
            <div class="inner-page">
                <a href="index.php?act=sp">Danh sách sản phẩm</a>
            </div>
            <div class="inner-page">
                <a href="index.php?act=binhluan">Danh sách bình luận</a>
            </div>
        </div>
    </div>
</body>