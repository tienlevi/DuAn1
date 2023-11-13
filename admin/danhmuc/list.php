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
                    <td style="width: 500px">Tên danh mục</td>
                    <td style="width: 100px">Chức năng</td>
                </tr>
                <?php foreach ($listdanhmuc as $danhmuc) { 
                    extract($danhmuc);
                    $sua = "index.php?act=editdm&id=".$id;
                    $xoa = "index.php?act=deletedm&id=".$id;
                echo '<tr>
                <td style="width: 100px;">'.$id.'</td>
                <td style="width: 500px;">'.$name.'</td>
                <td style="height: 100px;" class="edit-delete"><a href="'.$sua.'" class="edit">
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
            <a href="index.php?act=adddm">Thêm danh mục</a>
        </div>
    </div>
    <script>
    function confirmDelete(id) {
        if (confirm("Are you sure you want to delete this record?")) {
            window.location.href = "delete.php?id=" + id;
        }
    }
    </script>
</body>