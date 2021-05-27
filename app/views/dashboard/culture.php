  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-lg-12 col-md-8 col-sm-12">
        <div class="card mb-4">
          <div class="card-header pb-0 p-3">
            <div class="row">
              <div class="col-md-6 d-flex align-items-center">
                <h6 class="mb-0">Culture List</h6>
              </div>
              <div class="col-md-6 text-right">
                <a class="btn bg-gradient-dark mb-0" href="<?=BASEURL;?>/addculture"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add culture</a>
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
                  <?php foreach($data['budaya'] as $budaya) :?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1 text-center text-wrap">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="mb-0 text-secondary text-md"><?=$budaya['nama_id'];?></p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-wrap">
                        <p class="mb-0 text-secondary text-md"><?=substr($budaya['artikel_id'],0,100);?></p>
                      </td>
                      <td class="align-middle text-center text-wrap">
                        <p class="mb-0 text-secondary text-md"><?=ucwords(strtolower($budaya['nama_desa'])).', '.ucwords(strtolower($budaya['nama_provinsi']));?></p>
                      </td>
                      <td class="align-middle text-center">
                        <a class="btn btn-link text-danger text-gradient mb-0" href="<?= BASEURL;?>/dashboard/deleteculture/<?=$kerajinan['id'];?>"><i class="far fa-trash-alt me-2"></i>Delete</a>
                        <a class="btn btn-link text-dark mb-0" href="<?= BASEURL;?>/updateculture/<?=$budaya['id'];?>"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
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
                <h6 class="mb-0">Culture Gallery List</h6>
              </div>
              <div class="col-md-6 text-right">
                <a class="btn bg-gradient-dark mb-0" href="<?=BASEURL;?>/addgalleryculture"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Gallery</a>
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
                  <?php foreach($data['gallery'] as $gallery) :?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="mb-0 text-secondary text-md"><?= $gallery['nama_id']?></p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <img src="<?=BASEURL;?>/assets/images/<?= $gallery['gallery']?>" class="avatar avatar-xl">
                      </td>
                      <td class="align-middle text-center">
                        <a class="btn btn-link text-danger text-gradient mb-0" href="<?= BASEURL;?>/dashboard/deletegalleryculture/<?= $gallery['id']?>"><i class="far fa-trash-alt me-2"></i>Delete</a>
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
  </div>
</main>
