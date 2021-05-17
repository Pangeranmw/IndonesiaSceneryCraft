
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
  <div class="container my-auto">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-7 mx-auto ">
        <div class="card">
          <div class="card-title fs-4 mt-4 text-dark text-bold text-center">
            Register
          </div>
          <div class="card-body">
            <form role="form text-left">
              <div class="row">
                <div class="col-6">
                  <div class="mb-3">
                    <input name="" type="text" class="form-control" placeholder="Full Name">
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-3">
                    <input name="" type="text" class="form-control" placeholder="Username">
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <textarea name="" class="form-control" name="adresses" placeholder="Adresses"></textarea>
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="mb-3">
                    <input name="" type="text" class="form-control" placeholder="Phone Number">
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-3">
                    <input name="" type="text" class="form-control" placeholder="Email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="mb-3">
                    <div class="d-inline-block shadow-none">
                      <div class="ms-2 form-check d-inline-block">
                        <input class="form-check-input" type="radio" name="jenisKelamin" id="male">
                        <label class="form-check-label" for="male">
                          Male
                        </label>
                      </div>
                      <div class="ms-1 form-check d-inline-block">
                        <input class="form-check-input" type="radio" name="jenisKelamin" id="female">
                        <label class="form-check-label" for="female">
                          Female
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-3">
                    <input name="" type="date" class="form-control" placeholder="Date">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="mb-3">
                    <input name="" type="password" class="form-control" placeholder="Password">
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-3">
                    <input name="" type="password" class="form-control" placeholder="Confirm Password">
                  </div>
                </div>
              </div>
              <div class="form-check form-check-info text-left">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                <label class="form-check-label" for="flexCheckDefault">
                  I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                </label>
              </div>
              <div class="text-center">
                <button type="button" class="btn text-white w-100 my-4 mb-2" style="background-color: #707A7E;">Sign up</button>
              </div>
              <p class="text-sm mt-3 mb-0 text-center">Already have an account? <a href="<?=BASEURL;?>/home/login" class="text-dark font-weight-bolder">Log in</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
