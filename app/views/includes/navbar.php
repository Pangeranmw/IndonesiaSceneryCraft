<nav 
    class="shadow-blur navbar navbar-expand-md fixed-top navbar-fixed-top navbar-light"
    data-aos="fade-down"
>   
    <button
        onclick="changeNav()"
        class="navbar-toggler"
        id="btnNav"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#responsiveNavbar"
        aria-controls="responsiveNavbar"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">
        <div class="collapse navbar-collapse" id="responsiveNavbar">
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Destination</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Culture</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Craft</a>
                </li>
            </ul>
            <ul class="navbar-nav mx-auto text-center" id="logo">
                <a class="navbar-brand" href="#">
                    <img src="<?=BASEURL;?>/assets/images/logo.png" alt="" />
                </a>
            </ul>
            <ul class="navbar-nav ms-auto text-center">
                <li class="nav-item my-auto">
                    <form name="language" class="me-4" method="post" action="">
                        <select class="mb-auto mt-auto form-select lang" id="lang" name="language" id="" aria-label="Default select example">
                            <option value="en">En</option>
                            <option value="id">Id</option>
                        </select>
                    </form>
                </li>
                <li class="nav-item my-auto">
                    <form class="">
                        <div class="nav-link" id="mobile-search">Search</div>
                        <!-- <input class="form-control me-4" type="search" placeholder="Search" aria-label="Search"> -->
                        <button class="me-4 btn px-3 py-3 btn-search" id="search" type="submit"> </button>
                    </form>
                </li>
                <li class="nav-item my-auto">
                    <div class="cart">
                        <a href="#">
                            <div class="nav-link" id="mobile-cart">Cart</div>
                            <div class="me-4" id="cart">
                                <span class="qty">0</span>
                                <img src="<?= BASEURL; ?>/assets/images/ic-keranjang.svg" alt="">
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="btn btn-nav px-3 text-main" href="#">
                        LOG IN
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
