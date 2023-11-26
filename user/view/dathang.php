<?php
//  if(is_array($donhang)){
//     extract($donhang);
// }
?>
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
                <td style="padding: 10px; width: 150px;">Mã đơn hàng</td>
                <td style="padding: 10px; width: 250px;">Tên sản phẩm</td>
                <td style="padding: 10px; width: 250px;">Địa chỉ giao hàng</td>
                <td style="padding: 10px; width: 200px;">Thời gian đặt hàng</td>
                <td style="padding: 10px; width: 100px;">Giá tiền</td>
                <td style="padding: 10px; width: 100px;">Số lượng</td>
                <td style="padding: 10px; width: 200px;">Trạng thái</td>
            </tr>
            <?php 
                foreach($giohang as $value) {
                    extract($value);
                        echo '<tr>
                        <td style="padding: 10px;">'.$id.'</td>
                        <td style="padding: 10px;">'.$iddonhang.'</td>
                        <td style="padding: 10px;">'.$name.'</td>
                        <td style="padding: 10px;">'.$diachi.'</td>
                        <td style="padding: 10px;">'.$thoigiandathang.'</td>
                        <td style="padding: 10px;">'.$giatien.'đ</td>
                        <td style="padding: 10px;">'.$soluong.'</td>
                        <td style="padding: 10px;">'.($trangthai === 0 ? "<p style='color: orange'>Đang kiểm duyệt</p>" : "<p style='color: red;'>Hủy bỏ</p>").'</td>
                    </tr>';
                } 
             ?>
        </table>

    </div>
</div>