<?php
if(is_array($sanpham)){
    extract($sanpham);
}
?>
<link rel="stylesheet" href="./CSS/sanpham.css" />

<div class="row">
    <div class="container">
        <div class="product-detail-img">
            <img src="./Img/2.jpg" alt="1">
        </div>
        <div class="product-details">
            <h1><?=$name?></h1>
            <h2><?=$price?>đ</h2>
            <p><?=$mota?></p>
            <div class="product-details-click">
                <p>Thêm vào giỏ hàng</p>
            </div>
            <div class="product-details-buy">
                <a href="index.php?act=thanhtoan">Mua hàng</a>
            </div>
        </div>
    </div>
    <div class="other">
        <h1>Sản phẩm khác</h1>
    </div>
    <div class="other-product">
        <div class="product-item">
            <div class="product-img">
                <img src="./Img/1.jpg" alt="">
                <div class="product-click">
                    <div class="product-click-view">
                        <a href="">Xem chi tiết</a>
                    </div>
                    <div class="product-click-add">
                        <p>Thêm vào giỏ hàng</p>
                    </div>
                </div>
            </div>
            <div class="product-text">Áo adidas đen</div>
            <div class="product-price">300.000đ</div>
        </div>
        <div class="product-item">
            <div class="product-img">
                <img src="./Img/11.jpg" alt="">
                <div class="product-click">
                    <div class="product-click-view">
                        <a href="">Xem chi tiết</a>
                    </div>
                    <div class="product-click-add">
                        <p>Thêm vào giỏ hàng</p>
                    </div>
                </div>
            </div>
            <div class="product-text">Quần dài màu ghi</div>
            <div class="product-price">200.000đ</div>
        </div>
        <div class="product-item">
            <div class="product-img">
                <img src="./Img/30.jpg" alt="">
                <div class="product-click">
                    <div class="product-click-view">
                        <a href="">Xem chi tiết</a>
                    </div>
                    <div class="product-click-add">
                        <p>Thêm vào giỏ hàng</p>
                    </div>
                </div>
            </div>
            <div class="product-text"></div>
            <div class="product-price"><?=$price?>đ</div>
        </div>
        <div class="product-item">
            <div class="product-img">
                <img src="./Img/<?=$img?>" alt="">
                <div class="product-click">
                    <div class="product-click-view">
                        <a href="">Xem chi tiết</a>
                    </div>
                    <div class="product-click-add">
                        <p>Thêm vào giỏ hàng</p>
                    </div>
                </div>
            </div>
            <div class="product-text">Áo adidas xanh</div>
            <div class="product-price">300.000đ</div>
        </div>
    </div>
</div>

<script>

</script>