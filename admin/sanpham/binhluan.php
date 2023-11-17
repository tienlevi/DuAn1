<?php
// if(is_array($sanpham)){
//     extract($sanpham);
// }
  include "../../model/pdo.php";
  include "../../model/binhluan.php";
  $idpro = $_REQUEST['idpro'];
  $listbl = loadall_binhluan($idpro);
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../CSS/index.css">
<div class="wrapper">
    <div class="mt-3 px-3">
        <h2>BÌNH LUẬN</h2>
    </div>
    <div class="mt-3 px-3">
        <table class="table table-borderless">
            <tr>
                <th class="w-5">Id user</th>
                <th class="w-5">Nội dung</th>
                <th class="w-5">Ngày bình luận</th>
                <th class="w-5">Chức năng</th>
            </tr>
            <?php
                     foreach($listbl as $ds){
                        extract($ds);
                        echo '<tr>
                        <td>'.$iduser.'</td>
                        <td>'.$noidung.'</td>
                        <td>'.$ngaybinhluan.'</td>
                        <td><a href="" class="btn btn-danger">Ẩn bình luận</a></td>
                      </tr>';
                     }
                     ?>
        </table>
    </div>
    <!-- <div class="box_search">
         <form action="binhluanform.php" method="POST">
             <input type="hidden" name="idpro" value="<?=$idpro?>">
             <input type="hidden" name="iduser" value="<?=$iduser?>">

             <input type="text" name="noidung">
             <input type="submit" name="guibinhluan" value="Gửi bình luận">
         </form>
     </div>-->
    <?php 
    //   if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
    //     $noidung = $_POST['noidung'];
    //     $idpro = $_POST['idpro'];
    //     $iduser=$_SESSION['user']['id'];
    //     $ngaybinhluan=date('h:i:sa d/m/Y');
    //     insert_binhluan( $idpro,$iduser, $noidung,$ngaybinhluan);
    //     header("Location: ".$_SERVER['HTTP_REFERER']);
    //   }

      ?>
</div>