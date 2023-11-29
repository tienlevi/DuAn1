<div class="shopping-cart">
    <div class="inner-cart">
        <div class="item">
            <div class="cart-block">
                <h1>Giỏ hàng</h1>
            </div>
            <?php 
            viewCart(1);
            ?>
        </div>
        <div class="total">
            <div class="total-block">
                <?php 
                $tong = 0;
                foreach ($_SESSION['mycart'] as $cart) { 
                $tong += $cart[4];
            }
            $tongSoLuong = 0;
            if (isset($_SESSION['mycart'])) {
                $cartItems = $_SESSION['mycart'];
            
                foreach ($cartItems as $cart) {
                    $tongSoLuong += $cart[5]; // Số lượng sản phẩm là phần tử thứ 3 trong mỗi mục
                }
            }
                echo '<p>x'.$tongSoLuong.' Số lượng</p>
                <p>'.$tong.'đ</p>';
                 ?>
            </div>
            <div class="total-block">
                <p>Phí vận chuyển</p>
                <p>0đ</p>
            </div>
            <div class="total-block">
                <?php 
                $tong = 0;
                foreach ($_SESSION['mycart'] as $cart) { 
                $tong += $cart[4];
                }
                echo '<p>Tổng tiền</p>
                <p>'.$tong.'đ</p>';
                 ?>
            </div>
            <div class="total-buy">
                <a href="index.php?act=dathang">Đồng ý đặt hàng</a>
            </div>
        </div>
    </div>
</div>
</div>
</div>