<body>

    <div class="wrapper">
        <div class="font-title">
            <h1>Thêm mới danh mục</h1>
        </div>
        <div class="form-content">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row-input">
                    <label>Mã danh mục </label> <br>
                    <input type="text" name="id">
                </div>
                <div class="row-input">
                    <label>Tên danh mục </label> <br>
                    <input type="text" name="name">
                </div>
                <div class="row-input">
                    <label>Ảnh </label> <br>
                    <input type="file" name="img">
                </div>
                <div class="row-btn">
                    <input onclick="return confirmAdd()" type="submit" name="them" value="Thêm">
                </div>
            </form>
        </div>
    </div>
    <script>
    function confirmAdd() {
        if (confirm("Bạn có muốn thêm không")) {
            document.location = "index.php?act=listdm";
        } else {
            return false;
        }
    }
    </script>
</body>