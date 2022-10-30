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
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Campedia</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example1"
                                class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Slug</th>
                                        <th>Body</th>
                                        <th>Gambar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Ini judul</td>
                                        <td>Ini slug
                                        </td>
                                        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos
                                            praesentium quam hic accusantium placeat amet ipsa laborum. Voluptate,
                                            pariatur voluptatum. Excepturi totam labore a dolorem enim voluptatem
                                            architecto!</td>
                                        <td>inigambar.jpg</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
