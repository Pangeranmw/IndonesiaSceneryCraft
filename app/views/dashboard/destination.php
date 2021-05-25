  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-lg-12 col-md-8 col-sm-12">
        <div class="card mb-4">
          <div class="card-header pb-0 p-3">
            <div class="row">
              <div class="col-md-6 d-flex align-items-center">
                <h5 class="mb-0">Destination List</h5>
              </div>
              <div class="col-md-6 text-right">
                <a class="btn bg-gradient-dark mb-0" href="<?=BASEURL;?>/adddestination"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Destination</a>
              </div>
            </div>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-md font-weight-bolder">Name</th>
                    <th class="text-uppercase text-secondary text-center text-md font-weight-bolder">Description</th>
                    <th class="text-uppercase text-secondary text-center text-md font-weight-bolder">Location</th>
                    <th class="text-center text-md font-weight-bolder">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($data['destinasi'] as $destinasi) :?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1 text-wrap">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="mb-0 text-secondary text-md"><?=$destinasi['nama_id'];?></p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-wrap">
                        <p class="mb-0 text-secondary text-md"><?=substr($destinasi['artikel_id'],40);?></p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="mb-0 text-secondary text-md"><?=$destinasi['nama_desa'] .', '. $destinasi['nama_kecamatan'].', '.$destinasi['nama_kabupaten'].', '.$destinasi['nama_provinsi'];?></p>
                      </td>
                      <td class="align-middle text-center">
                        <a class="btn btn-link text-danger text-gradient mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                        <a class="btn btn-link text-dark mb-0" href="<?=BASEURL;?>/dashboard/updatedestination"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </td>
                    </tr>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-8 col-sm-12">
        <div class="card mb-4">
          <div class="card-header pb-0 p-3">
            <div class="row">
              <div class="col-md-6 d-flex align-items-center">
                <h5 class="mb-0">Destination Category List</h5>
              </div>
              <div class="col-md-6 text-right">
                <a class="btn bg-gradient-dark mb-0" href="<?=BASEURL;?>/dashboard/addcategorydestination"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Category</a>
              </div>
            </div>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-md font-weight-bolder">Name</th>
                    <th class="text-uppercase text-secondary text-center text-md font-weight-bolder">Category</th>
                    <th class="text-center text-md font-weight-bolder">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <p class="mb-0 text-secondary text-md">Rinjani Mountain</p>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <p class="mb-0 text-secondary text-md">Mountain</p>
                    </td>
                    <td class="align-middle text-center">
                      <a class="btn btn-link text-danger text-gradient mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-8 col-sm-12">
        <div class="card mb-4">
          <div class="card-header pb-0 p-3">
            <div class="row">
              <div class="col-md-6 d-flex align-items-center">
                <h5 class="mb-0">Destination Gallery List</h5>
              </div>
              <div class="col-md-6 text-right">
                <a class="btn bg-gradient-dark mb-0" href="<?=BASEURL;?>/dashboard/addgallerydestination"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Gallery</a>
              </div>
            </div>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-md font-weight-bolder">Name</th>
                    <th class="text-uppercase text-secondary text-center text-md font-weight-bolder">Photo</th>
                    <th class="text-center text-md font-weight-bolder">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <p class="mb-0 text-secondary text-md">Rinjani Mountain</p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <img src="<?=BASEURL;?>/assets/images/hero-img.png" class="avatar avatar-xl">
                    </td>
                    <td class="align-middle text-center">
                      <a class="btn btn-link text-danger text-gradient mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
