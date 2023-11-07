<?php
if(is_array($danhmuc)){
    extract($danhmuc);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="row">
        <div class="font-title">
            <h1>Sửa danh mục</h1>
        </div>
        <div class="form-content">
            <form action="index.php?act=editdm" method="POST" enctype="multipart/form-data">
                <div class="row-input">
                    <label> Mã danh mục </label> <br>
                    <input type="text" name="id" value="<?=$id?>">
                </div>
                <div class="row-input">
                    <label>Tên danh mục</label> <br>
                    <input type="text" name="name" value="<?=$name?>">
                </div>

                <div class="row-btn">
                    <input type="submit" name="sua" value="Sửa">
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<!-- END HEADER -->