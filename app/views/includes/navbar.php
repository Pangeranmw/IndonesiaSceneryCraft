
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
                    <a class="nav-link <?php if($data['aktif']=='home') echo 'nav-active';?>" href="<?= BASEURL;?>/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($data['aktif']=='destination') echo 'nav-active';?>" href="<?= BASEURL;?>/destination">Destination</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($data['aktif']=='culture') echo 'nav-active';?>" href="<?= BASEURL;?>/culture">Culture</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($data['aktif']=='craft') echo 'nav-active';?>" href="<?= BASEURL;?>/craft">Craft</a>
                </li>
            </ul>
            <ul class="navbar-nav mx-auto text-center" id="logo">
                <a class="navbar-brand" href="<?= BASEURL;?>/home">
                    <img src="<?=BASEURL;?>/assets/images/logo.png" alt="" />
                </a>
            </ul>
            <ul class="navbar-nav ms-auto text-center">
                <li class="nav-item my-auto">
                    <form name="lang" class="" method="POST" action="">
                        <select class="mb-auto mt-auto form-select lang" id="lang" name="lang" id="" onchange='this.form.submit()' aria-label="Default select example">
                            <option value="en" <?php if($_SESSION['lang']=='en') echo 'selected'?> >En</option>
                            <option value="id" <?php if($_SESSION['lang']=='id') echo 'selected'?>>Id</option>
                        </select>
                        <noscript><input type="submit" value="Submit"></noscript>
                    </form>
                </li>
                <li class="nav-item my-auto">
                    <div class="me-4 px-3">
                        <form action="<?=BASEURL?>/search" method="post">
                            <div class="searchBox">
                                <div class="nav-link" id="mobile-search">Search</div>
                                <input class="searchInput py-2"type="text" name="search" placeholder="Search" required>
                                <button type="submit" class="searchButton">
                                    <i class="material-icons my-auto">search</i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- <form class="">
                        <div class="nav-link" id="mobile-search">Search</div>
                        <button class="me-4 btn px-3 py-3 btn-search" id="search" type="submit"> </button>
                    </form> -->
                </li>
                <li class="nav-item my-auto">
                    <div class="cart">
                        <a href="<?= BASEURL;?>/cart">
                            <div class="nav-link" id="mobile-cart">Cart</div>
                            <div class="me-4" id="cart">
                                <?php if(!is_null($data['qty'])) :?>
                                    <span class="qty <?php if ($data['qty']>0) echo 'nonzero';?>"><?=$data['qty'];?></span>
                                <?php endif;?>
                                <img src="<?= BASEURL; ?>/assets/images/ic-keranjang.svg" alt="">
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <!-- If Not Login -->
                    <?php if (!isset($_SESSION["login"])) { ?>
                        <a class="btn btn-nav px-3 text-main" href="<?= BASEURL; ?>/login">
                            LOG IN
                        </a>
                    <?php } else{ ?>
                        <div class="btn-group">
                            <?php if($_SESSION['login']=='admin'){?>
                                <button type="button" class="btn btn-nav px-3 text-main dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Hi, <?= $data['admin']['nama']; ?>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?= BASEURL; ?>/dashboard/destination">Dashboard</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <form action=" <?= BASEURL?>/logout" method="post">
                                            <button type="submit" class="dropdown-item" >Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            <?php } else {?>
                                <button type="button" class="btn btn-nav px-3 text-main dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Hi, <?= $data['user']['username']; ?>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?= BASEURL; ?>/account">Account</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <form action=" <?= BASEURL?>/logout" method="post">
                                            <button type="submit" class="dropdown-item" >Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            <?php }?>
                        </div>
                    <?php }?>
                </li>
            </ul>
        </div>
    </div>
</nav>
