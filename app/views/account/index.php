
    <div class="container-fluid">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('<?=BASEURL;?>/assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
      </div>
      <div class="card card-body blur shadow-blur mx-4 mt-n6">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="<?=BASEURL;?>/assets/images/<?=$data['user']['foto'];?>" alt="..." class="w-100 border-radius-lg shadow-sm">
              <a href="<?=BASEURL;?>/account/editphoto" class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2">
                <i class="fa fa-pen top-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Image"></i>
              </a>
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                <?=$data['user']['nama_lengkap'];?>
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                <?=$data['user']['profesi'];?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                  <h6 class="mb-0">Profile Information</h6>
                </div>
                <div class="col-md-4 text-right">
                  <a href="<?=BASEURL;?>/account/editprofile">
                    <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body p-3">
              <ul class="list-group">
                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp; <?=$data['user']['nama_lengkap'];?></li>
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Username:</strong> &nbsp; <?=$data['user']['username'];?></li>
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Profession:</strong> &nbsp; <?=$data['user']['profesi'];?></li>
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; <?=$data['user']['email'];?></li>
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Phone Number:</strong> &nbsp; <?=$data['user']['nomor_hp'];?></li>
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Born Date:</strong> &nbsp; <?=$data['user']['tanggal_lahir'];?></li>
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Gender:</strong> &nbsp; <?=$data['user']['jenis_kelamin'];?></li>
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Address:</strong> &nbsp; <?=$data['user']['alamat'];?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
