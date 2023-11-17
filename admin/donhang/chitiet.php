<?php
if(is_array($donhang)){
    extract($donhang);
}

?>
<div class="wrapper">
    <div class="container-h1">
        <h1>Chi tiết đơn hàng</h1>
    </div>
    <div class="container">
        <div style="margin-left: 0; padding: 0px 10px;" class="list-product-detail">
            <p>Mã đơn: <?=$id?></p>
            <p>Tên khách hàng: <?=$khachhang?></p>
            <p>Tên sản phẩm: <?=$sanpham?></p>
            <p>Giá: <?=$giatien?>đ</p>
            <p>Phí vận chuyển: <?=$phivanchuyen?>đ</p>
            <p>Phương thức thanh toán: <?=$phuongthucthanhtoan === 0 ? "Chuyển khoản" : "Thanh toán khi giao hàng"?></p>
            <p>Địa chỉ giao hàng: <?=$diachi?></p>
            <p>Thời gian mua: <?=$thoigianmua?></p>
            <p>Ngày giao hàng: 16-11-2023</p>
            <p>Số lượng: <?=$soluong?></p>
            <p>Mã xác nhận: 09321</p>
            <p>Trạng thái: <span><?=$trangthai === 0 ? "Tiền mặt" : "Chuyển khoản"?></span></p>
            <p>Ghi chú: <?=$ghichu?></p>
        </div>
    </div>
    <div class="function-back">
        <a href="index.php?act=donhang">Quay lại trang đơn hàng</a>
    </div>
</div>