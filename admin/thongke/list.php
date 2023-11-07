<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="list">
        <h1>Thống kê</h1>
        <table border="1">
            <tr>
                <td style="width: 100px;">Id danh mục</td>
                <td style="width: 300px;">Tên danh mục</td>
                <td style="width: 200px;">Số lượng</td>
                <td style="width: 200px;">Giá cao nhất</td>
                <td style="width: 200px;">Giá thấp nhất</td>
                <td style="width: 200px;">Giá trung bình</td>

            </tr>
            <?php foreach ($listthongke as $thongke) {
                extract($thongke);
           echo ' <tr>
                <td>'.$madm.'</td>
                <td>'.$tendm.'</td>
                <td>'.$countsp.'</td>
                <td>'.$minprice.'.000đ</td>
                <td>'.$maxprice.'.000đ</td>
                <td>'.$avgprice.'.000đ</td>
            </tr>';
           } ?>
        </table>
    </div>
    <div class="function">
        <a href="index.php">Quay lại trang chủ</a>
        <a href="index.php?act=addsp">Mở lại tài khoản</a>
    </div>
</body>

</html>