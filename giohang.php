<div class="shopping-cart">
    <div class="inner-cart">
        <div class="item">
            <div class="cart-block">
                <h1>Giỏ hàng</h1>
            </div>
            <?php 
            $i = 0;
             foreach ($_SESSION['mycart'] as $cart) {
                $image = '../Img/'.$cart[2].'';
                $xoa = 'index.php?act=deletecart&id='.$i.'';
                echo '<div class="inner-item">
                <div class="inner-item-name">
                    <img src="'.$image.'" alt=""/>
                    <div class="inner-item-name-price">
                    <h2>'.$cart[1].'</h2>
                    <p>Giá: '.$cart[3].'đ</p>
                    </div>
                </div>
                <a href='.$xoa.'><i class="fa-solid fa-trash"></i></a>
            </div>';
            $i += 1;
            } ?>
        </div>
        <div class="total">
            <div class="total-block">
                <?php 
                $tong = 0;
                foreach ($_SESSION['mycart'] as $cart) { 
                $tong += $cart[4];
                $count = count($_SESSION['mycart']);
                }
                echo '<p>x'.$count.' Số lượng</p>
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


                //
                function insert_thanhtoan($name,$email,$diachi,$sdt,$pttt,$ngaydathang,$tongdonhang  ){
                    $sql="insert into thanhtoan(name,email,diachi,sdt,pttt,ngaydathang,tongdonhang) values ('$noidung','$email','$diachi','$sdt','$pttt','$ngaydathang','$tongdathang')";
                   return thanhtoan_execute_return_lastInsertId($sql);
                  }

                  function insert_giohang($idusser,$makhachhang,$diachi,$sdt,$pttt,$ngaydathang,$tongdonhang  ){
                    $sql="insert into thanhtoan(name,email,diachi,sdt,pttt,ngaydathang,tongdonhang) values ('$noidung','$email','$diachi','$sdt','$pttt','$ngaydathang','$tongdathang')";
                   return thanhtoan_execute_return_lastInsertId($sql);
                  }
//
                 ?>
            </div>
            <div class="total-buy">
                <a href="index.php?act=thanhtoan">Mua hàng</a>
            </div>
        </div>
    </div>
</div>
</div>
</div>

