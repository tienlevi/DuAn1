<?php
if(isset($_POST["dangnhap"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($username == "admin" && $password == "admin"){
        $_SESSION["admin"] = $username;
        header("location: ../admin/index.php");
    } 
}
if(isset($_SESSION["admin"])){
    header("location: ../admin/index.php");
} 
if(isset($_SESSION["user"])){
    header("location: ../client/index.php");
} 

ob_start();
?>
<div class="wrapper">
    <div class="login">
        <h1>Đăng nhập</h1>
        <form action="" method="post" class="form-login">
            <div class="form-input">
                <p>Tài khoản</p>
                <input type="text" name="username" />
            </div>
            <div class="form-input">
                <p>Mật khẩu</p>
                <input type="password" name="password" />
                <?php
            ob_end_flush(); 
            ?>
            </div>
            <div class="forget-password">
                <a href="">Quên mật khẩu ?</a>
            </div>
            <div class="login-btn">
                <input type="submit" name="dangnhap" value="Đăng nhập">
            </div>
            <div class="forget-password">
                <a href="index.php?act=dangky">Đăng ký tài khoản</a>
            </div>
        </form>
    </div>
</div>