<body>
    <div class="row">
        <div class="admin">
            <h1>Danh sách khách hàng</h1>
        </div>
        <form class="filter" action="index.php?act=listsp" method="post">
            <input type="text" name="kym" placeholder="Tìm khách hàng" />
            <input class="filter-search" type="submit" name="listok" value="Lọc khách hàng" />
        </form>
        <div class="table">
            <table border="1">
                <tr>
                    <td style="width: 100px">Id</td>
                    <td style="width: 250px">Tên tài khoản</td>
                    <td style="width: 200px">Mật khẩu</td>
                    <td style="width: 200px">Email</td>
                    <td style="width: 200px">Địa chỉ</td>
                    <td style="width: 100px">SĐT</td>
                    <td style="width: 100px">Role</td>
                    <td style="width: 200px">Trạng thái</td>
                    <td style="width: 400px">Chức năng</td>
                </tr>
                <?php foreach ($listtk as $tk) {
                extract($tk);
                $xoa = "index.php?act=deletetk&id=".$id;
           echo ' <tr>
                <td>'.$id.'</td>
                <td>'.$username.'</td>
                <td>'.$password.'</td>
                <td>'.$email.'</td>
                <td>'.$address.'</td>
                <td>'.$phone.'</td>
                <td>'.$idrole.'</td>
                <td>'.$trangthai.'</td>
                <td class="edit-delete">
                    <a href="'.$xoa.'" class="delete">
                        Khóa tài khoản
                    </a>
                </td>
            </tr>';
           } ?>
            </table>
        </div>
    </div>
</body>