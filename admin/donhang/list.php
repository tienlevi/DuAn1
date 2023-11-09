<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="admin">

            <h1>Đơn hàng</h1>
        </div>
        <table border="1">
            <tr>
                <td style="width: 100px;">STT</td>
                <td style="width: 100px;">Mã đơn</td>
                <td style="width: 200px;">Khách hàng</td>
                <td style="width: 200px;">Tên hàng</td>
                <td style="width: 200px;">Giá tiền hàng</td>
                <td style="width: 200px;">Thời gian mua</td>
                <td style="width: 200px;">Chức năng</td>
            </tr>
            <tr>
                <td style="width: 100px;">1</td>
                <td style="width: 100px;">1</td>
                <td style="width: 200px;">tienlienha123</td>
                <td style="width: 200px;">Áo Adidas</td>
                <td style="width: 200px;">100.000đ</td>
                <td style="width: 200px;">6-11-2023</td>
                <td style="height: 100px;" class="edit-delete">
                    <a href="'.$xoa.'" class="delete"> Hủy đơn hàng </a>
                    <a href="'.$xoa.'" class="edit"> Sửa đơn hàng </a>
                </td>
            </tr>

        </table>
    </div>

</body>


</html>