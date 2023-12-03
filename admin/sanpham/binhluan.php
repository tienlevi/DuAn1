<?php
  include "../../model/pdo.php";
  include "../../model/binhluan.php";
  $idpro = $_REQUEST['idpro'];
  $listbl = loadAllBl($idpro);
  if(isset($_GET['idan']) && ($_GET['idan'] > 0)){
    anBinhLuan($idpro,$_GET['idan']);
  }
  if(isset($_GET['idhien']) && ($_GET['idhien'] > 0)){
    hienBinhLuan($idpro,$_GET['idhien']);
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
                <td>'.($trangthai === 0 ? "<a href='binhluan.php?idpro=$idpro&idan=$id' onclick='return HideComment()' class='btn btn-danger'>Ẩn bình luận</a>" 
                : "<a href='binhluan.php?idpro=$idpro&idhien=$id' onclick='return ShowComment()' class='btn btn-success'>Hiện bình luận</a>").'</td>
                </tr>';
                }
              ?>
        </table>
    </div>
</div>
<script>
function HideComment() {
    if (confirm("Bạn có muốn ẩn bình luận này không ?")) {
        alert("Ẩn bình luận thành công")
    } else {
        return false;
    }
}

function ShowComment() {
    if (confirm("Bạn có muốn Hiện bình luận này không ?")) {
        alert("Hiện bình luận thành công")
    } else {
        return false;
    }
}
</script>