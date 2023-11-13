<?php
if(is_array($sanpham)){
    extract($sanpham);
}
$image = ".././Ảnh/$img";
if(is_file($image)){
    $img = "<img src='".$image."' alt=''>";
} else {
    echo "";
}
?>
<div class="row">
    <div class="container-h1">
        <h1>Chi tiết sản phẩm</h1>
    </div>
    <div class="container">
        <div class="list-product-img">
            <img src="./Img/<?=$img?>" alt="">
        </div>
        <div class="list-product-detail">
            <p>Id sản phẩm: <?=$id?></p>
            <p>Tên sản phẩm: <?=$name?></p>
            <p>Giá: <?=$price?>đ</p>
            <p>Mô tả: <?=$mota?></p>
            <p>Tên danh mục: Áo</p>
            <p>Lượt xem: <?=$luotxem?></p>
        </div>
    </div>
    <div class="function-back">
        <a href="index.php?act=listsp">Quay lại trang sản phẩm</a>
    </div>
</div>