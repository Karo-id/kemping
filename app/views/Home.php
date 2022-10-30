<header class="text-white position-relative p-0 m-0">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top"
            id="navigation-bar">
            <div class="container">
                <a class="navbar-brand"
                    href="#"><img src="<?=BASE_URL;?>assets/icons/favicon.svg"
                        alt="Kemping"
                        class="nav-icon" />
                    <span class="nav-title">KEMPING</span></a>
                <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse"
                    id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active"
                            aria-current="page"
                            href="<?=BASE_URL;?>#">Home</a>
                        <a class="nav-link"
                            href="<?=BASE_URL;?>#">Camp</a>
                        <a class="nav-link"
                            href="<?=BASE_URL;?>#shop">Shop</a>
                        <a class="nav-link"
                            href="<?=BASE_URL;?>#campedia">Campedia</a>
                        <a class="nav-link"
                            href="<?=BASE_URL;?>#">About</a>
                        <a class="nav-link"
                            href="<?=BASE_URL;?>#">Contact Us</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="hero-text position-absolute top-50">
            <h1 class="tagline">BOYOLALI CAMPGROUND</h1>
            <p class="sub-tagline">
                Boyolali is a regency in the eastern part of Central Java province
                in Indonesia.
            </p>
            <button type="button"
                class="btn btn-success btn-discover">
                DISCOVER MORE
            </button>
        </div>
    </div>
</header>

<main>
    <section id="shop">
        <div class="container">
            <div class="d-flex flex-row justify-content-between heading-shop">
                <h1 class="heading-shop-text">SHOP</h1>
            </div>
            <div class="shop-images">
                <div class="row mb-4">
                    <div class="col-6">
                        <div class="stuffs text-white position-relative"
                            id="tent"
                            data-aos="zoom-out"
                            data-aos-duration="600">
                            <h1 class="stuffs-title position-absolute">Tent</h1>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stuffs text-white position-relative"
                            id="boots"
                            data-aos="zoom-out"
                            data-aos-duration="900">
                            <h1 class="stuffs-title position-absolute">Boots</h1>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-6">
                        <div class="stuffs text-white position-relative"
                            id="backpack"
                            data-aos="zoom-out"
                            data-aos-duration="600">
                            <h1 class="stuffs-title position-absolute">Backpack</h1>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stuffs text-white position-relative"
                            id="jacket"
                            data-aos="zoom-out"
                            data-aos-duration="900">
                            <h1 class="stuffs-title position-absolute">Jacket</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tagline-shop text-center">
                <h1 class="tagline-shop-heading">FIND YOUR CAMPING EQUIPMENT</h1>
                <button type="button"
                    class="btn btn-success btn-shop">SHOP</button>
            </div>
        </div>

        <!-- Line -->
        <img src="<?=BASE_URL;?>assets/components/line.svg"
            alt="Line"
            class="line" />
    </section>

    <section id="campedia"
        data-aos="zoom-in">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="campedia-image"
                    id="campfire"></div>
                <img src="<?=BASE_URL;?>assets/components/divider.svg"
                    alt="Divider"
                    class="divider" />
                <div class="campedia-text position-relative">
                    <h2 class="campedia-text-subtitle">TUTORIAL</h2>
                    <h1 class="campedia-text-title">How to make a campfire</h1>
                    <p class="campedia-text-paragraph">
                        Camping isn't complete without a good ole campfire, but how do
                        you build one? Starting a campfire at a campground or in
                        backcountry is a breeze once you know which sticks to grab and
                        how to arrange them.
                    </p>
                    <button type="button"
                        class="btn btn-success btn-campedia position-absolute">
                        READ MORE
                    </button>
                </div>
            </div>
        </div>
    </section>
</main>
