
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
            Register
          </div>
          <div class="card-body">
            <form role="form text-left" action="<?= BASEURL;?>/signup/tambah" method="post">
              <div class="row">
                <div class="col-6">
                  <div class="mb-3">
                    <input name="nama_lengkap" type="text" class="form-control" placeholder="Full Name">
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-3">
                    <input name="username" type="text" class="form-control" placeholder="Username">
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <input name="profesi" class="form-control" type="text" name="profesi" placeholder="Profession">
              </div>
              <div class="mb-3">
                <textarea name="alamat" class="form-control" row="1" name="adresses" placeholder="Adresses"></textarea>
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="mb-3">
                    <input name="nomor_hp" type="text" class="form-control" placeholder="Phone Number">
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-3">
                    <input name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="mb-3">
                    <div class="d-inline-block shadow-none">
                      <div class="ms-2 form-check d-inline-block">
                        <input class="form-check-input" type="radio" name="jenisKelamin" id="male" value="Laki-laki"> 
                        <label class="form-check-label" for="male">
                          Male
                        </label>
                      </div>
                      <div class="ms-1 form-check d-inline-block">
                        <input class="form-check-input" type="radio" name="jenisKelamin" id="female" value="Perempuan">
                        <label class="form-check-label" for="female">
                          Female
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-3">
                    <input name="tanggal_lahir" type="date" class="form-control" placeholder="Date">
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
              <div class="form-check form-check-info text-left">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                <label class="form-check-label" for="flexCheckDefault">
                  I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                </label>
              </div>
              <div class="text-center">
                <button type="submit" class="btn text-white w-100 my-4 mb-2" style="background-color: #707A7E;">Sign up</button>
              </div>
              <p class="text-sm mt-3 mb-0 text-center">Already have an account? <a href="<?=BASEURL;?>/home/login" class="text-dark font-weight-bolder">Log in</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<script>tinymce.activeEditor.mode.set("readonly");</script>
