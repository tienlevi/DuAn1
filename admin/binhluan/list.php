<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="list">
        <h1>Bình luận</h1>
        <table border="1">
            <tr>
                <td style="width: 100px;">Id</td>
                <td style="width: 700px;">Nội dung</td>
                <td style="width: 200px;">Id user</td>
                <td style="width: 200px;">Id pro</td>
                <td style="width: 200px;">Ngày bình luận</td>
                <td style="width: 200px;">Chức năng</td>
            </tr>
            <?php foreach ($listbinhluan as $binhluan) { 
                    extract($binhluan);
                    $xoa = "index.php?act=deletedm&id=".$id;
                echo '<tr>
                <td style="width: 200px;">'.$id.'</td>
                <td style="width: 500px;">'.$noidung.'</td>
                <td style="width: 200px;">'.$idpro.'</td>
                <td style="width: 200px;">'.$iduser.'</td>
                <td style="width: 300px;">'.$ngaybinhluan.'</td>
                <td class="edit-delete">
                    <a href="'.$xoa.'"
                        class="delete">
                        Xoá
                    </a>
                </td>
            </tr>';
             } ?>
        </table>
    </div>
    <div class="function">
        <div class="function">
            <a href="index.php">Quay lại trang chủ</a>
        </div>
    </div>
</body>


</html>