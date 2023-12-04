<div class="content-information">
    <div class="information">
        <h1>Lịch sử đặt hàng</h1>
    </div>
</div>
<div class="content">

    <div class="table">
        <table class="table-bordered" border="1">
            <tr>
                <td style="padding: 10px; width: 50px;">Mã đơn</td>
                <td style="padding: 10px; width: 250px;">Tên sản phẩm</td>
                <td style="padding: 10px; width: 250px;">Địa chỉ giao hàng</td>
                <td style="padding: 10px; width: 150px;">Thời gian đặt hàng</td>
                <td style="padding: 10px; width: 100px;">Giá tiền</td>
                <td style="padding: 10px; width: 100px;">Số lượng</td>
                <td style="padding: 10px; width: 100px;">Thành tiền</td>
                <td style="padding: 10px; width: 200px;">Trạng thái</td>
                <td style="padding: 10px; width: 200px;">Chức năng</td>
            </tr>
            <?php 
                foreach($donhang as $value) {
                    extract($value);
                        echo '<tr>
                        <td style="padding: 10px;">'.$id.'</td>
                        <td style="padding: 10px;">'.($name ? $name : "").'</td>
                        <td style="padding: 10px;">'.$diachi.'</td>
                        <td style="padding: 10px;">'.$thoigiandathang.'</td>
                        <td style="padding: 10px;">'.$giatien.'đ</td>
                        <td style="padding: 10px;">'.$soluong.'</td>
                        <td style="padding: 10px;">'.($giatien * $soluong).'đ</td>
                        <td style="padding: 10px;">'.($trangthai === 0 ? "<p style='color: orange;'>Đang kiểm duyệt</p>" : ($trangthai === 2 ? "<p style='color: green;'>Thành công</p>" : "<p style='color: red;'>Hủy bỏ</p>")).'</td>
                        <td style="padding: 10px;">
                        <a class="btn btn-danger my-1" style="width: 100%; font-size: 14px" href="index.php?act=huydonhang&id='.$id.'" onclick="return huyBo()">Hủy đơn hàng</a>
                        <a class="btn btn-warning my-1" style="width: 100%; font-size: 14px" href="index.php?act=chitietdonhang&id='.$id.'">Chi tiết đơn hàng</a>
                        </td>

                        </tr>';
                } 
             ?>
        </table>

    </div>
</div>
<script>
function huyBo() {
    if (confirm("Bạn có muốn hủy đơn hàng không ?")) {
        document.location = "index.php?act=lichsudathang";
        alert("Cập nhật thành công");
    } else {
        return false;
    }
}
</script>