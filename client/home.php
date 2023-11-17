<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<div class="swiper mySwiper" style="--swiper-navigation-color: #fff; --swiper-pagination-color: #000">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="banner-img">
                <img src="../Img/leoslideshow/slide-1-1920x800.jpg" alt="">
                <div class="banner-text">
                    <h3>Bộ sưu tập Artifort</h3>
                    <p>Quần áo giá rẻ Tham khảo ngay</p>
                    <a href="">Xem thêm</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="banner-img">
                <img src="../Img/leoslideshow/slide-2-1920x800.jpg" alt="">
                <div class="banner-text">
                    <h3>Artifort Collectie</h3>
                    <p>Weatherized essentials to help keep<br>them dry, whatever the weather.</p>
                    <a href="">Xem thêm</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide"><img src="../Img/leoslideshow/slide-3-1920x800.jpg" alt="">
            <div class="banner-text">
                <h3>Artifort Collectie</h3>
                <p>Weatherized essentials to help keep<br>them dry, whatever the weather.</p>
                <a href="">Xem thêm</a>
            </div>
        </div>
    </div>
    <!-- <div class="swiper-button-next" style="width: 60px; height: 60px; background-color: rgba(0, 0, 0, 0.2);"></div>
    <div class="swiper-button-prev" style="width: 60px; height: 60px; background-color: rgba(0, 0, 0, 0.2);"></div>
    <div class="swiper-pagination"></div> -->
</div>
</div>
<!-- <div class="row"> -->

<div class="content">
    <div class="inner-content">
        <div class="content-left">
            <h1>Sản phẩm</h1>
            <div class="product">
                <?php foreach($listsanpham as $sanpham) {
                extract($sanpham);
                $detail = "index.php?act=sanphamct&id=".$id;
                 echo '<div class="product-item">
                 <div class="product-img">
                         <img src="../Img/'.$img.'" alt="">
                         <div class="product-click">
                             <a href="'.$detail.'" class="product-click-view">
                                 Xem chi tiết
                             </a>
                             <div class="product-click-add">
                                 Thêm vào giỏ hàng
                             </div>
                         </div>
                     </div>
                     <div class="product-text">'.$name.'</div>
                     <div class="product-price">'.$giatien.'đ</div>
                 </div>';
            } ?>
            </div>
        </div>
        <div class="content-right">
            <h1>Danh mục</h1>
            <?php foreach($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo '<div class="content-right-tab">
                <p><i class="fa-solid fa-caret-right"></i><span>'.$name.'</span></p>
            </div>';
            } ?>
        </div>
    </div>
</div>
<div class="mkt-customer">
    <h1>Khách hàng nói gì</h1>
    <p>Đánh giá của khách hàng, chính là các phản hồi từ khách hàng sau một thời gian sử dụng sản phẩm, dịch vụ mà doanh
        nghiệp của bạn cung cấp. Các</p>
    <img src="https://movic.b-cdn.net/at_gucci_demo/themes/at_gucci/assets/img/modules/appagebuilder/images/avata-man.jpg"
        alt="">
</div>
<div class="intro">
    <div class="intro-inner">
        <div class="intro-item">
            <i class="fa-solid fa-rocket"></i>
            <h2>Miễn phí ship</h2>
            <p>Cho tất cả đơn hàng trên 300.000đ</p>
        </div>
        <div class="intro-item">
            <i class="fa-regular fa-life-ring"></i>
            <h2>Hỗ trợ thân thiện</h2>
            <p>24/7 cả ngày lễ</p>
        </div>
        <div class="intro-item">
            <i class="fa-solid fa-arrows-rotate"></i>
            <h2>Thanh toán được bảo đảm</h2>
            <p>Tất cả các khoản thanh toán đều được bảo mật và đáng tin cậy</p>
        </div>
    </div>
</div>
<!-- </div> -->
<script type="text/javascript">
var swiper = new Swiper(".mySwiper", {
    loop: true,
    effect: "fade",
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    fadeEffect: {
        crossFade: true,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
</script>