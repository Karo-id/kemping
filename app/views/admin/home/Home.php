<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link"
                data-widget="pushmenu"
                href="#"
                role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?=BASE_URL;?>dashboard/"
                class="nav-link">Preview</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?=BASE_URL;?>dashboard/edit"
                class="nav-link">Edit</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link"
                data-widget="navbar-search"
                href="#"
                role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar"
                            type="search"
                            placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar"
                                type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar"
                                type="button"
                                data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link"
                data-widget="fullscreen"
                href="#"
                role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Home</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div style="--aspect-ratio: 16/9;">
                        <iframe src="<?=BASE_URL;?>"
                            height="900"
                            width="1600"
                            class="w-100"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
