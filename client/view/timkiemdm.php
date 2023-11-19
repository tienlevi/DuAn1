<?php
if(is_array($danhmuc)){
    extract($danhmuc);
}
?>
<div class="result-search">
    <div class="result-search-main">
        <h1>Danh mục tìm kiếm <?=$name?></h1>
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
                    <form action="index.php?act=giohang" method="post" class="product-click-add">
                    <input type="hidden" name="id" value="'.$id.'"/>    
                    <input type="hidden" name="name" value="'.$name.'"/>
                    <input type="hidden" name="img" value="'.$img.'"/>
                    <input type="hidden" name="giatien" value="'.$giatien.'"/>
                    <input type="submit" name="addtocart" value="Thêm vào giỏ hàng"/>
                    </form>
                </div>
            </div>
            <div class="product-text">'.$name.'</div>
            <div class="product-price">'.$giatien.'đ</div>
        </div>';
     } ?>
    </div>
</div>