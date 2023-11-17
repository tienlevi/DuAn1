<body>
    <div class="wrapper">
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
                    <td style="width: 200px">Trạng thái</td>
                    <td style="width: 300px">Chức năng</td>
                </tr>
                <?php foreach ($listtk as $tk) {
                extract($tk);
                $khoataikhoan = "index.php?act=khoatk&id=".$id;
                $molaitaikhoan = "index.php?act=molaitk&id=".$id;
           echo ' <tr>
                <td>'.$id.'</td>
                <td>'.$username.'</td>
                <td>'.$password.'</td>
                <td>'.$email.'</td>
                <td>'.$diachi.'</td>
                <td>'.$sdt.'</td>
                <td>'.($trangthai === 0 ? "<p style='color: green;'>Hoạt động</p>" : "<p style='color: red;'>Bị khóa tài khoản</p>").'</td>
                <td class="edit-delete">
                    '.($trangthai === 0 ? "<a href=".$khoataikhoan." onclick='return confirmUpdate()' class='delete'>
                    Khóa tài khoản
                </a>"
                 : "<a href=".$molaitaikhoan." onclick='return confirmUpdate()' class='detail'>Mở lại tài khoản</a>").'
                </td>
            </tr>';
           } ?>
            </table>
        </div>
    </div>
</body>
<script>
function confirmUpdate() {
    if (confirm("Bạn có muốn cập nhật trạng thái không ?")) {
        document.location = "index.php?act=listsp";
    } else {
        return false;
    }
}
</script>