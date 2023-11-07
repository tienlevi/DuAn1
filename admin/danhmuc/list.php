<body>
    <div class="row">
        <div class="admin">
            <h1>Danh sách danh mục</h1>
        </div>
        <form class="filter" action="index.php?act=listsp" method="post">
            <input type="text" name="kym" />
            <select name="iddm" id="">
                <option value="0" selected>Tất cả</option>

                <option value="'.$id.'"></option>
            </select>
            <input class="filter-search" type="submit" name="listok" value="Lọc danh mục" />
        </form>
        <div class="table">
            <table border="1">
                <tr>
                    <td style="width: 100px">Id</td>
                    <td style="width: 600px">Tên danh mục</td>
                    <td style="width: 100px">Chức năng</td>
                </tr>
                <tr>
                    <td style="width: 100px">1</td>
                    <td style="width: 600px">Áo</td>
                    <td style="height: 100px" class="edit-delete">
                        <a href="'.$sua.'" class="edit"> Sửa </a>
                        <a href="'.$xoa.'" class="delete"> Xoá </a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="function">
            <a href="index.php">Quay lại trang chủ</a>
            <a href="index.php?act=">Xóa tất cả</a>
            <a href="index.php?act=addsp">Thêm danh mục</a>
        </div>
    </div>
</body>