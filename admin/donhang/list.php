<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="admin">

            <h1>Đơn hàng</h1>
        </div>
        <form class="filter" action="index.php?act=listsp" method="post">
            <input type="text" name="kym" />
            <select name="iddm" id="">
                <option value="0" selected>Tất cả</option>

                <option value="'.$id.'"></option>
            </select>
            <input class="filter-search" type="submit" name="listok" value="Lọc đơn hàng" />
        </form>
        <div class="table">
            <table border="1">
                <tr>
                    <td style="width: 50px;">Mã đơn</td>
                    <td style="width: 200px;">Khách hàng</td>
                    <td style="width: 200px;">Tên hàng</td>
                    <td style="width: 150px;">Giá tiền hàng</td>
                    <td style="width: 200px;">Địa chỉ giao hàng</td>
                    <td style="width: 200px;">Thời gian mua</td>
                    <td style="width: 100px;">Số lượng</td>
                    <td style="width: 200px;">Trạng thái</td>
                    <td style="width: 200px;">Ghi chú</td>
                    <td style="width: 200px;">Chức năng</td>
                </tr>
                <?php foreach ($listdonhang as $donhang) { 
                    extract($donhang);
                    $sua = "index.php?act=editsp&id=".$id;
                    $xoa = "index.php?act=deletesp&id=".$id;
                    $detail = "index.php?act=chitietdonhang&id=".$id;
                echo '<tr>
                <td>'.$id.'</td>
                <td>'.$khachhang.'</td>
                <td>'.$sanpham.'</td>
                <td>'.$giatien.'đ</td>
                <td>'.$diachi.'</td>
                <td>'.$thoigianmua.'</td>
                <td>'.$soluong.'</td>
                <td>'.($trangthai === 0 ? "<p style='color: green;'>Kiểm duyệt</p>" : "<p style='color: red;'>Hết hàng</p>").'</td>
                <td>'.$ghichu.'</td>
                <td class="edit-delete">
                <a href="'.$detail.'" class="detail">
                        Chi tiết đơn hàng
                    </a>
                    <a href="'.$sua.'" class="edit">
                        Sửa
                    </a>
                    <a href="'.$xoa.'" onclick="return confirmDelete()" class="delete">
                        Xóa
                    </a>
            </tr>';
             } ?>

            </table>

        </div>
    </div>

</body>


</html>