<div class="pay">
    <div class="pay-form">
        <form action="process_payment.php" method="POST">
            <div class="pay-label">
                <label for="card-number">Họ Tên</label>
                <input type="text" name="card-number" required>
            </div>
            <div class="pay-label">
                <label for="card-number">Địa chỉ</label>
                <input type="text" name="card-number" required>
            </div>
            <div class="pay-label">
                <label for="card-number">Số điện thoại</label>
                <input type="text" name="card-number" required>
            </div>
            <div class="pay-label">
                <label for="card-number">Ghi chú</label>
                <input type="text" name="card-number" required>
            </div>
            <div class="pay-label">
                <label for="card-number">Hình thức thanh toán</label>
                <div class="payment_methods">
                    <div class="payment_method">
                        <input name="payment_method" type="radio">
                        <label>Chuyển khoản trực tiếp</label>
                    </div>
                    <div class="payment_method">
                        <input name="payment_method" type="radio">
                        <label>Thanh toán khi giao hàng</label>
                    </div>
                </div>
            </div>
            <button type="submit">Thanh toán</button>
        </form>
        <div class="all-product-money">
            <div class="total-block-main">
                <p style="display: flex; align-items: center;"><img src="./Img/1.jpg" width="50px" alt=""><span>Áo
                        Adidas x1</span>
                </p>
                <p>200.000đ</p>
            </div>
            <div class="total-block">
                <p>1 sản phẩm</p>
                <p>200.000đ</p>
            </div>
            <div class="total-block">
                <p>Phí vận chuyển</p>
                <p>0đ</p>
            </div>
            <hr style="margin: 10px 0px;">
            <div class="total-block">
                <p>Tổng tiền</p>
                <p>200.000đ</p>
            </div>
        </div>
    </div>
</div>

<?php
//
function thanhtoan_execute_return_lastInsertId($sql){
    $sql_args = array_slice(func_get_args(),1);
    try{
        $conn = thanhtoan_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt=>execute($sql_args);
        return $conn->lastInsertId()
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
?>