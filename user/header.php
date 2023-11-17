<aside>
    <div class="brand">
        <img src="../Img/user2-160x160.jpg" alt="" />
        <p>tienlienha123</p>
    </div>
    <div class="sidebar">
        <div class="form-inline">
            <div class="input-group">
                <input class="form-control form-control-sidebar" placeholder="Search" />
            </div>
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
        <nav>
            <div class="nav-parent">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Trang chủ người dùng</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?act=listtk" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Thay đổi thông tin</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?act=donhang" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Đơn hàng</p>
                    </a>
                </li>
                <li class="nav-item">
                    <div class="function">
                        <form action="" method="post">
                            <input type="submit" name="dangxuat" value="Đăng xuất" />
                        </form>
                    </div>
                </li>
            </div>
        </nav>
    </div>
</aside>
<div class="sidebar-overlay"></div>
<header class="header">
    <div class="menu">
        <div class="menu-bar">
            <i class="fa-solid fa-bars"></i>
        </div>
        <li><a href="index.php">Trang chủ</a></li>

    </div>
    <form class="user-search" action="index.php?act=sanpham" method="POST">
        <input type="text" class="input" name="kyw" placeholder="Tìm sản phẩm" />

        <button type="submit" name="timkiem">
            <i class="fas fa-search fa-fw"></i>
        </button>
    </form>
</header>