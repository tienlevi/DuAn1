<div class="row">
    <div class="admin">
        <h1>Danh sách sản phẩm</h1>
    </div>
    <form class="filter" action="index.php?act=sp" method="post">
        <input type="text" name="kym" />
        <select name="iddm" id="">
            <option value="0" selected>Tất cả</option>
            <?php foreach ($listdanhmuc as $danhmuc) { 
                    extract($danhmuc);
                echo '<option value="'.$id.'">'.$name.'</option>';
             } ?>
            <option value="'.$id.'"></option>
        </select>
        <input class="filter-search" type="submit" name="listok" value="Lọc danh mục" />
    </form>
    <div class="table">
        <table border="1">
            <tr>
                <td style="width: 50px;">Chọn</td>
                <td style="width: 100px;">Id</td>
                <td style="width: 200px;">Tên sản phẩm</td>
                <td style="width: 100px;">Giá</td>
                <td style="width: 200px;">Ảnh</td>
                <td style="width: 400px;">Mô tả</td>
                <td style="width: 50px;">Id Danh mục</td>
                <td style="width: 200px;">Chức năng</td>
            </tr>
            <?php foreach ($listsanpham as $sanpham) { 
                    extract($sanpham);
                    $sua = "index.php?act=editsp&id=".$id;
                    $xoa = "index.php?act=deletesp&id=".$id;
                echo '<tr>
                <td style="width: 50px;"><input type="checkbox"/></td>
                <td style="width: 100px;">'.$id.'</td>
                <td style="width: 200px;">'.$name.'</td>
                <td style="width: 100px;">'.$price.'</td>
                <td style="width: 200px;"><img src="./Img/'.$img.'" alt=""></td>
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
    <div class="function">
        <a href="index.php">Quay lại trang chủ</a>
        <a href="index.php?act=">Xóa tất cả</a>
        <a href="index.php?act=addsp">Thêm sản phẩm</a>
    </div>
</div>