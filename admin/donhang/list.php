<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
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
            <table class="table-bordered" border="1">
                <tr>
                    <td style="width: 50px;">Mã đơn</td>
                    <td style="width: 200px;">Khách hàng</td>
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
                    $huyhang = "index.php?act=huydonhang&id=".$id;
                    $detail = "index.php?act=chitietdonhang&id=".$id;
                echo '<tr>
                <td>'.$id.'</td>
                <td>'.$khachhang.'</td>
                <td>'.$diachi.'</td>
                <td>'.$thoigiandathang.'</td>
                <td>'.$soluong.'</td>
                <td>'.($trangthai === 0 ? "<p style='color: orange'>Đang kiểm duyệt</p>" : "<p style='color: red;'>Hủy bỏ</p>").'</td>
                <td>'.$ghichu.'</td>
                <td class="edit-delete">
                <a href="'.$detail.'" class="detail">
                        Chi tiết đơn hàng
                    </a>
                    <a href="'.$huyhang.'" onclick="return confirmUpdate()" class="delete">
                        Hủy giao hàng
                    </a>
            </tr>';
             } ?>

            </table>

        </div>
    </div>

</body>
<script>
function confirmUpdate() {
    if (confirm("Bạn có muốn cập nhật trạng thái không ?")) {
        document.location = "index.php?act=donhang";
        alert("Cập nhật thành công");
    } else {
        return false;
    }
}
</script>

</html>