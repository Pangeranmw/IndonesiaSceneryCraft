<body class="g-sidenav-show bg-white">
  <!-- Navbar -->
  <nav class="navbar rounded-pill navbar-expand-lg bg-white blur shadow-blur py-2 my-4 start-0 end-0 mx-4">
    <div class="container">
      <a class="navbar-brand" href="<?=BASEURL;?>/home">
        <img style="height: 50px;" src="<?= BASEURL; ?>/assets/images/logo-header-main.svg" alt="">
      </a>
    </div>
  </nav>
  <!-- End Navbar -->
  <section>
    <div class="page-header section-height-50">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
            <div class="card card-plain my-auto">
              <div class="card-header pb-0 text-left bg-transparent">
                <h3 class="font-weight-bolder text-info text-dark">Admin Login</h3>
                <p class="mb-0">Enter your email and password to login</p>
              </div>
              <div class="card-body">
                <form role="form text-left" action="<?= BASEURL?>/loginadmin/ceklogin" method="post">
                  <label>Email</label>
                  <div class="mb-3">
                    <input name="input_email" type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                  </div>
                  <label>Password</label>
                  <div class="mb-3">
                    <input name="input_password" type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                  </div>
                  <div class="text-center">
                    <button type="submit" style="background-color: #707A7E;" class="btn w-100 mt-4 mb-0 text-white">Login</button>
                  </div>
                </form> 
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
              <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('<?= BASEURL; ?>/assets/images/beach.jpg')"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
