<?php
if(is_array($sanpham)){
    extract($sanpham);
}
?>
<link rel="stylesheet" href="./CSS/sanpham.css" />

<div class="row">
    <h1 style="text-align: center;">Chi tiết sản phẩm</h1>
    <div class="container">
        <div class="product-detail-img">
            <img src="../Img/<?=$img?>" alt="1">
        </div>
        <div class="product-details">
            <h1><?=$name?></h1>
            <h2><?=$giatien?>đ</h2>
            <p>Mô tả: <?=$mota?></p>
            <h3>Số lượng:
                <div class="quantity">
                    <button class="decrease">-</button>
                    <input type="number" class="count" value="1">
                    <button class="increase">+</button>
                </div>
            </h3>
            <div class="product-details-click">
                <p>Thêm vào giỏ hàng</p>
            </div>
            <div class="product-details-buy">
                <a href="index.php?act=thanhtoan">Mua hàng</a>
            </div>
        </div>
    </div>
    <div class="comment">
        <h1 style="margin: 10px 15px;">Bình luận</h1>
        <textarea style="resize: none; margin: 20px 20px;" name="" id="" cols="167" rows="5"></textarea>
    </div>
    <input style="width: 150px; height: 35px; background-color: #000; color: #fff; font-size: 17px;"
        class="submit-comment" type="submit" value="gửi bình luận">
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