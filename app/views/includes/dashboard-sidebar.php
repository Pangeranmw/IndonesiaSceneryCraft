<body class="g-sidenav-show bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-left ms-3" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute right-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="<?= BASEURL;?>/dashboard/destination">
        <img src="<?= BASEURL ?>/assets/images/logo-header-main.svg" class="navbar-brand-img w-100" alt="...">
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php if($data['aktif']=='destination') echo 'active';?>" href="<?= BASEURL;?>/dashboard/destination">
            <span class="nav-link-text ms-1">Destination</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($data['aktif']=='category') echo 'active';?>" href="<?= BASEURL;?>/dashboard/category">
            <span class="nav-link-text ms-1">Category</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($data['aktif']=='culture') echo 'active';?>" href="<?= BASEURL;?>/dashboard/culture">
            <span class="nav-link-text ms-1">Culture</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($data['aktif']=='craft') echo 'active';?>" href="<?= BASEURL;?>/dashboard/craft">
            <span class="nav-link-text ms-1">Craft</span>
          </a>
        </li>
      </ul>
      <hr class="horizontal dark mt-5">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php if($data['aktif']=='home') echo 'active';?>" href="<?= BASEURL;?>/home">
            <span class="nav-link-text ms-1">Go Back Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL;?>/logout">
            <span class="nav-link-text ms-1">Logout</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
