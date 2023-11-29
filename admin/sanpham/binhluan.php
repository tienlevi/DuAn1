<?php
  include "../../model/pdo.php";
  include "../../model/binhluan.php";
  $idpro = $_REQUEST['idpro'];
  $listbl = loadAllBl($idpro);
  if(isset($_GET['id']) && ($_GET['id'] > 0)){
    anBinhLuan($_GET['id']);
  }
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
                <td><a href="binhluan.php?idpro='.$idpro.'&id='.$id.'">'.($trangthai === 0 ? "<p class='btn btn-danger'>Ẩn bình luận</p>" : "<p class='btn btn-success'>Hiện bình luận</p>").'</a></td>
                </tr>';
                }
              ?>
        </table>
    </div>
</div>