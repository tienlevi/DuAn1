<div class="row">
    <div class="admin">
        <h1>Danh sách sản phẩm</h1>
    </div>
    <form class="filter" action="index.php?act=listsp" method="post">
        <input type="text" name="kym" />
        <select name="iddm" id="">
            <option value="0" selected>Tất cả</option>

            <option value="'.$id.'"></option>
        </select>
        <input class="filter-search" type="submit" name="listok" value="Lọc sản phẩm" />
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
                <td style="width: 50px;">Lượt xem</td>
                <td style="width: 50px;">Id Danh mục</td>
                <td style="width: 200px;">Chức năng</td>
            </tr>
            <tr>
                <td style="width: 50px;"><input type="checkbox" /></td>
                <td style="width: 100px;">1</td>
                <td style="width: 200px;">Áo adidas</td>
                <td style="width: 100px;">100.000đ</td>
                <td style="width: 200px;"><img src="../Img/1.jpg" alt=""></td>
                <td style="width: 400px;">Reference site about Lorem Ipsum, giving information on its origins, as
                    well as a random Lipsum generator.
                </td>
                <td style="width: 50px;">1</td>
                <td style="width: 50px;">1</td>
                <td class="edit-delete"><a href="index.php?act=editsp" class="edit">
                        Sửa
                    </a>
                    <a href="'.$xoa.'" class="delete">
                        Xoá
                    </a>
                </td>
            </tr>
            <tr>
                <td style="width: 50px"><input type="checkbox" /></td>
                <td style="width: 100px">2</td>
                <td style="width: 200px">Áo adidas xanh</td>
                <td style="width: 100px">250.000đ</td>
                <td style="width: 200px"><img src="../Img/2.jpg" alt="" /></td>
                <td style="width: 400px">
                    Reference site about Lorem Ipsum, giving information on its
                </td>
                <td style="width: 50px">1</td>
                <td style="width: 50px">1</td>
                <td style="width: 150px" class="edit-delete">
                    <a href="index.php?act=editdm" class="edit"> Sửa </a>
                    <a href="" class="delete"> Xoá </a>
                </td>
            </tr>
        </table>
    </div>
    <div class="function">
        <a href="index.php">Quay lại trang chủ</a>
        <a href="index.php?act=">Xóa tất cả</a>
        <a href="index.php?act=addsp">Thêm sản phẩm</a>
    </div>
</div>