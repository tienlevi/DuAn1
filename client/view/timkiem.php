<div class="result-search">
    <div class="result-search-main">
        <h1>Kết quả tìm kiếm <?=$kym?></h1>
    </div>
    <div class="aside"></div>
    <div class="product">
        <?php foreach ($listsanpham as $sanpham) { 
            $i = 0;
              if(($i == 2) || ($i == 5) || ($i == 8 || ($i == 11))){
                $mr = "";
             }else{
                $mr = "mr";
             }
            extract($sanpham);
                    $detail = "index.php?act=sanphamct&id=".$id;
        echo '<div class="product-item">
        <div class="product-img">
                <img src="../Img/'.$img.'" alt="">
                <div class="product-click">
                    <div class="product-click-view">
                        <a href="'.$detail.'">Xem chi tiết</a>
                    </div>
                    <div class="product-click-add">
                        <p>Thêm vào giỏ hàng</p>
                    </div>
                </div>
            </div>
            <div class="product-text">'.$name.'</div>
            <div class="product-price">'.$giatien.'đ</div>
        </div>';
     } ?>
    </div>
</div>