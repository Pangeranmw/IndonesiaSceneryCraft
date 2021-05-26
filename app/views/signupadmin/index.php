
<body class="g-sidenav-show bg-gray-100">
  <!-- Navbar -->
  <nav class="navbar rounded-pill navbar-expand-lg bg-white blur shadow-blur py-2 my-4 start-0 end-0 mx-4">
    <div class="container">
      <a class="navbar-brand" href="<?=BASEURL;?>/home">
        <img style="height: 50px;" src="<?= BASEURL; ?>/assets/images/logo-header-main.svg" alt="">
      </a>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="container my-5">
    <div class="row">
      <div class="col-xl-6 col-lg-8 col-md-8 mx-auto ">
        <div class="card">
          <div class="card-title fs-4 mt-4 text-dark text-bold text-center">
            Register Admin
          </div>
          <div class="card-body">
            <form role="form text-left" action="<?= BASEURL;?>/signupadmin/tambah" method="post">
              <div class="row">
                <div class="col-6">
                  <div class="mb-3">
                    <input name="nama" type="text" class="form-control" placeholder="Nama">
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-3">
                    <input name="email" type="email" class="form-control" placeholder="Email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="mb-3">
                    <input name="password" type="password" class="form-control" placeholder="Password">
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-3">
                    <input name="confirmpassword" type="password" class="form-control" placeholder="Confirm Password">
                  </div>
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn text-white w-100 my-4 mb-2" style="background-color: #707A7E;">Sign up</button>
              </div>
              <p class="text-sm mt-3 mb-0 text-center">Already have an account? <a href="<?=BASEURL;?>/loginadmin" class="text-dark font-weight-bolder">Log in</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
