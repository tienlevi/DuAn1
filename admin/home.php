<body>

    <div class="row">
        <div class="admin">
            <h1>Trang quản lý Admin</h1>
        </div>
        <div class="row-box">
            <div class="small-box">
                <div class="inner">
                    <?php foreach ($listthongke as $thongke) {
                extract($thongke);
           echo '<h3>'.$countsp.'</h3>';
           } ?>
                    <p>Sản phẩm</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
            </div>
            <div class="small-box">
                <div class="inner">
                    <h3>6</h3>
                    <p>Danh mục</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-signal"></i>
                </div>

            </div>
            <div class="small-box">
                <div class="inner">
                    <h3>1</h3>
                    <p>Người dùng đã đăng ký</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-user-plus"></i>
                </div>

            </div>
            <div class="small-box">
                <div class="inner">
                    <h3>0</h3>
                    <p>Lượt bình luận</p>
                </div>
                <div class="icon">
                    <i class="fas fa-comments"></i>
                </div>
            </div>
        </div>
        <div class="view-all">
            <h1>Tổng quan</h1>
        </div>
        <div class="table">
            <table border="1">
                <tr>
                    <td style="width: 50px">Id</td>
                    <td style="width: 200px">Tên sản phẩm</td>
                    <td style="width: 100px">Giá</td>
                    <td style="width: 200px">Ảnh</td>
                    <td style="width: 400px">Mô tả</td>
                    <td style="width: 50px">Id Danh mục</td>
                    <td style="width: 150px">Chức năng</td>
                </tr>
                <?php foreach ($listsanpham as $sanpham) { 
                    extract($sanpham);
                    $sua = "index.php?act=editsp&id=".$id;
                    $xoa = "index.php?act=deletesp&id=".$id;
                echo '<tr>
                <td style="width: 50px;">'.$id.'</td>
                <td style="width: 200px;">'.$name.'</td>
                <td style="width: 100px;">'.$giatien.'đ</td>
                <td style="width: 200px;"><img src="../Img/'.$img.'" alt=""></td>
                <td style="width: 400px;">'.$mota.'</td>
                <td style="width: 50px;">'.$iddm.'</td>
                <td class="edit-delete"><a href="'.$sua.'" class="edit">
                        Sửa
                    </a>
                    <a href="'.$xoa.'"
                        class="delete">
                        Xoá
                    </a>
                </td>
            </tr>';
             } ?>
            </table>
        </div>
    </div>
</body>