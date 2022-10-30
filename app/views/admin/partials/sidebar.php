<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=BASE_URL;?>"
        class="brand-link d-flex">
        <div>
            <img src="<?=BASE_URL;?>assets/icons/favicon.svg"
                alt="Kemping"
                class="brand-image img-circle"
                style="opacity: .8;width:38px">
        </div>
        <div>
            <span class="brand-text font-weight-light d-block">Kemping</span>
        </div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=BASE_URL;?>assets/adminlte/img/user1-128x128.jpg"
                    class="img-circle elevation-2"
                    alt="Administrator">
            </div>
            <div class="info">
                <a href="#"
                    class="d-block">Administrator</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-header">APPLICATION</li>
                <li class="nav-item menu-open">
                    <a href="#"
                        class="nav-link active">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Pages
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=BASE_URL;?>dashboard/"
                                class="nav-link <?=($_SERVER["REQUEST_URI"] == "/kemping/dashboard/" || $_SERVER["REQUEST_URI"] == "/kemping/dashboard/?q=content") ? "active" : "";?>">
                                <i class="fas fa-house nav-icon"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/profile.html"
                                class="nav-link">
                                <i class="fas fa-tent nav-icon"></i>
                                <p>Camp</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/e-commerce.html"
                                class="nav-link">
                                <i class="fas fa-store nav-icon"></i>
                                <p>Shop</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=BASE_URL;?>dashboard/?page=campedia"
                                class="nav-link <?=($_SERVER["REQUEST_URI"] == "/kemping/dashboard/?page=campedia" || $_SERVER["REQUEST_URI"] == "/kemping/dashboard/?page=campedia&q=content") ? "active" : "";?>">
                                <i class="fas fa-campground nav-icon"></i>
                                <p>Campedia</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/project-add.html"
                                class="nav-link">
                                <i class="fas fa-address-card nav-icon"></i>
                                <p>About Us</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/project-edit.html"
                                class="nav-link">
                                <i class="fas fa-phone nav-icon"></i>
                                <p>Contact Us</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#"
                        class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/examples/lockscreen.html"
                                class="nav-link">
                                <i class="fas fa-user nav-icon"></i>
                                <p>Rangga Agastya</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
