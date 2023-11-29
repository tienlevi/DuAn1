<?php
if(isset($_SESSION['user'])){
    $name = $_SESSION['user']['username'];
    $diachi = $_SESSION['user']['diachi'];
    $email = $_SESSION['user']['email'];
    $sdt = $_SESSION['user']['sdt'];
} else {
    $name = "";
    $diachi = "";
    $email = "";
    $sdt = "";
}
?>
<div class="pay">
    <div class="pay-form">
        <form action="" method="POST">
            <div class="pay-label">
                <label for="card-number">Tên tài khoản</label>
                <input type="text" name="khachhang" value="<?=$name?>" required>
            </div>
            <div class="pay-label">
                <label for="card-number">Địa chỉ</label>
                <input type="text" name="diachi" value="<?=$diachi?>" required>
            </div>
            <div class="pay-label">
                <label for="card-number">Email</label>
                <input type="text" name="email" value="<?=$email?>" required>
            </div>
            <div class="pay-label">
                <label for="card-number">Số điện thoại</label>
                <input type="text" name="sdt" value="<?=$sdt?>" required>
            </div>
            <div class="pay-label">
                <label for="card-number">Ghi chú</label>
                <input type="text" name="ghichu" value="">
            </div>
            <div class="pay-label">
                <label for="card-number">Hình thức thanh toán</label>
                <div class="payment_methods">
                    <div class="payment_method">
                        <input value="0" name="phuongthucthanhtoan" type="radio" checked>
                        <label>Chuyển khoản trực tiếp</label>
                    </div>
                    <div class="payment_method">
                        <input value="1" name="phuongthucthanhtoan" type="radio">
                        <label>Thanh toán khi giao hàng</label>
                    </div>
                </div>
            </div>
            <input class="confirm-pay" type="submit" name="dongydathang" value="đặt hàng">
        </form>
        <div class="bill">
            <h1>Thông tin giỏ hàng</h1>
            <table class="table-bordered" border="1">
                <tr>
                    <td class="p-2" style="width: 100px;">STT</td>
                    <td class="p-2" style="width: 200px;">Ảnh</td>
                    <td class="p-2" style="width: 200px;">Tên sản phẩm</td>
                    <td class="p-2" style="width: 100px;">Giá</td>
                    <td class="p-2" style="width: 100px;">Số lượng</td>
                </tr>
                <?php 
                $i = 0;
                $tong = 0;
                 foreach ($_SESSION['mycart'] as $cart) {
                    $tong += $cart[4];
                    $image = '../Img/'.$cart[2].'';
                    echo '<tr class="p-4">
                    <td class="p-2">'.$i.'</td>
                    <td class="p-2"><img src='.$image.' height="180px"/></td>
                    <td class="p-2">'.$cart[1].'</td>
                    <td class="p-2">'.$cart[4].'đ</td>
                    <td class="p-2">'.$cart[5].'</td>
                    </tr>
                    ';
                    $i += 1;
                }
                echo "<h3>Tổng tiền: $tong</h3>";
                 ?>
            </table>
        </div>
    </div>
</div>

<script>
// function thanhToan() {
//     alert("Thanh toán thành công");
// }
</script>