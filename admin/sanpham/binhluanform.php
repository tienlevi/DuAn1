<?php
// if(is_array($sanpham)){
//     extract($sanpham);
// }
  include "../../model/pdo.php";
  include "../../model/binhluan.php";
  $idpro = $_REQUEST['idpro'];
  $listbl = loadall_binhluan($idpro);
  echo $idpro;
?>
<link rel="stylesheet" href="../CSS/index.css">
<div class="wrapper">
    <div class="box_title">
        <h2>BÌNH LUẬN</h2>
    </div>
    <div class="box-content">
        <table>
            <tr>
                <th>Id user</th>
                <th>Nội dung</th>
                <th>Ngày bình luận</th>
            </tr>
            <?php
                     foreach($listbl as $ds){
                        extract($ds);
                        echo '<tr>
                        <td>'.$iduser.'</td>
                        <td>'.$noidung.'</td>
                        <td>'.$ngaybinhluan.'</td>
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