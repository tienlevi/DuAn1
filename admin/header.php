<?php
$url = $_SERVER['REQUEST_URI'];
?>


<body>
    <aside>
        <div class="brand">
            <img src="../Img/user2-160x160.jpg" alt="" />
            <p>Admin</p>
        </div>
        <div class="sidebar">
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                        aria-label="Search" />
                </div>
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
            <nav>
                <ul class="nav-parent">
                    <li class="nav-item">
                        <a href="index.php"
                            class="nav-link <?php echo $url == '/WD18331_DuAn1/admin/index.php' || $url == '/WD18331_DuAn1/admin/' ? 'active-nav-link' : ''  ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Trang chủ Admin</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?act=listdm"
                            class="nav-link <?php echo $url == '/WD18331_DuAn1/admin/index.php?act=listdm' || $url == '/WD18331_DuAn1/admin/index.php?act=editdm' || $url == '/WD18331_DuAn1/admin/index.php?act=adddm' ? 'active-nav-link' : '' ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Danh mục</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?act=listsp"
                            class="nav-link <?php echo $url == '/WD18331_DuAn1/admin/index.php?act=listsp' || $url == '/WD18331_DuAn1/admin/index.php?act=editsp' || $url == '/WD18331_DuAn1/admin/index.php?act=addsp' ? 'active-nav-link' : '' ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Sản phẩm</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?act=listtk"
                            class="nav-link <?php echo $url == '/WD18331_DuAn1/admin/index.php?act=listtk' ? 'active-nav-link' : '' ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Khách hàng</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="thongke.html"
                            class="nav-link <?php echo $url == '/WD18331_DuAn1/admin/index.php?act=thongke' ? 'active-nav-link' : '' ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Thống kê</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="bieudohinhtron.html"
                            class="nav-link <?php echo $url == '/WD18331_DuAn1/admin/index.php?act=bieudo' ? 'active-nav-link' : '' ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Biểu đồ</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="function">
                            <form action="" method="post">
                                <input type="submit" name="dangxuat" value="Đăng xuất" />
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <div class="sidebar-overlay"></div>
    <div class="header">
        <div class="menu">
            <div class="menu-bar">
                <i class="fa-solid fa-bars"></i>
            </div>
            <li><a href="../index.php">Trang chủ</a></li>
        </div>
        <form class="user-search" action="index.php?act=sanpham" method="POST">
            <input type="text" class="input" name="kyw" placeholder="Tìm sản phẩm" />
            <!-- <input
            type="submit"
            class="searchs"
            name="timkiem"
            value="Tìm kiếm"
          /> -->

            <button type="submit" name="timkiem">
                <i class="fas fa-search fa-fw"></i>
            </button>
        </form>
    </div>
</body>