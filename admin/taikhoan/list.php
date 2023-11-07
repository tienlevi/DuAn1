<body>
    <div class="row">
        <div class="admin">
            <h1>Danh sách khách hàng</h1>
        </div>
        <!-- <form class="filter" action="index.php?act=listsp" method="post">
            <input type="text" name="kym" />
            <select name="iddm" id="">
                <option value="0" selected>Tất cả</option>

                <option value="'.$id.'"></option>
            </select>
            <input class="filter-search" type="submit" name="listok" value="Lọc danh mục" />
        </form> -->
        <div class="table">
            <table border="1">
                <tr>
                    <td style="width: 100px">Id</td>
                    <td style="width: 300px">Tên tài khoản</td>
                    <td style="width: 200px">Mật khẩu</td>
                    <td style="width: 200px">Email</td>
                    <td style="width: 200px">Địa chỉ</td>
                    <td style="width: 200px">SĐT</td>
                    <td style="width: 100px">Role</td>
                    <td style="width: 400px">Chức năng</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>tienlienha123</td>
                    <td>tien2004</td>
                    <td>tien@gmail.com</td>
                    <td>Hà Nội</td>
                    <td>0987273123</td>
                    <td>2</td>
                    <td style="height: 100px;" class="edit-delete">
                        <a href="'.$xoa.'" class="delete"> Khóa tài khoản </a>
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