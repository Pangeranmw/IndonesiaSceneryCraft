  <?php
    function limit_text($text, $limit) {
      if (str_word_count($text, 0) > $limit) {
        $words = str_word_count($text, 2);
        $pos   = array_keys($words);
        $text  = substr($text, 0, $pos[$limit]) . '...';
      }
      return $text;
    }
  ?>
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-lg-12 col-md-8 col-sm-12">
        <div class="card mb-4">
          <div class="card-header pb-0 p-3">
            <div class="row">
              <div class="col-md-6 d-flex align-items-center">
                <h6 class="mb-0">Craft List</h6>
              </div>
              <div class="col-md-6 text-right">
                <a class="btn bg-gradient-dark mb-0" href="<?=BASEURL;?>/addcraft"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Craft</a>
              </div>
            </div>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-md font-weight-bolder">Name</th>
                    <th class="text-uppercase text-secondary text-center text-md font-weight-bolder">Price</th>
                    <th class="text-uppercase text-secondary text-center text-md font-weight-bolder">Stock</th>
                    <th class="text-uppercase text-secondary text-center text-md font-weight-bolder">Description</th>
                    <th class="text-uppercase text-secondary text-center text-md font-weight-bolder">Location</th>
                    <th class="text-center text-md font-weight-bolder">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($data['kerajinan'] as $kerajinan) : ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1 text-wrap">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="mb-0 text-secondary text-center text-wrap text-md"><?=$kerajinan['nama_'.$_SESSION['lang'].''];?></p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-wrap">
                        <p class="mb-0 text-secondary text-md">Rp <?=str_replace(',', '.', number_format($kerajinan['harga']));?></p>
                      </td>
                      <td class="align-middle text-center text-wrap">
                        <p class="mb-0 text-secondary text-md"><?=$kerajinan['stok'];?></p>
                      </td>
                      <td class="align-middle text-center text-wrap">
                        <p class="mb-0 text-secondary text-md"><?=limit_text($kerajinan['deskripsi_'.$_SESSION['lang'].''], 20);?></p>
                      </td>
                      <td class="align-middle text-center text-wrap">
                        <p class="mb-0 text-secondary text-md"><?=ucwords(strtolower($kerajinan['nama_desa'])).', '.ucwords(strtolower($kerajinan['nama_provinsi']));?></p>
                      </td>
                      <td class="align-middle text-center">
                        <a class="btn btn-link text-danger text-gradient mb-0" href="<?= BASEURL;?>/dashboard/deletecraft/<?=$kerajinan['id'];?>"><i class="far fa-trash-alt me-2"></i>Delete</a>
                        <a class="btn btn-link text-dark mb-0" href="<?= BASEURL;?>/updatecraft/<?=$kerajinan['id'];?>"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
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
                <h6 class="mb-0">Craft Category List</h6>
              </div>
              <div class="col-md-6 text-right">
                <a class="btn bg-gradient-dark mb-0" href="<?=BASEURL;?>/addcategorycraft"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Category</a>
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
                  <?php foreach($data['kategori_craft'] as $kategori) :?>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <p class="mb-0 text-secondary text-md"><?=$kategori['nama_'.$_SESSION['lang'].'']?></p>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <p class="mb-0 text-secondary text-md"><?=$kategori['kategori_'.$_SESSION['lang'].'']?></p>
                    </td>
                    <td class="align-middle text-center">
                      <a class="btn btn-link text-danger text-gradient mb-0" href="<?=BASEURL;?>/dashboard/deletecategorycraft/<?=$kategori['id_kategori']?>"><i class="far fa-trash-alt me-2"></i>Delete</a>
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
                <h6 class="mb-0">Craft Gallery List</h6>
              </div>
              <div class="col-md-6 text-right">
                <a class="btn bg-gradient-dark mb-0" href="<?=BASEURL;?>/addgallerycraft"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Gallery</a>
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
                            <p class="mb-0 text-secondary text-md"><?= $gallery['nama_'.$_SESSION['lang'].'']?></p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <img src="<?=BASEURL;?>/assets/images/<?= $gallery['gallery']?>" class="avatar avatar-xl">
                      </td>
                      <td class="align-middle text-center">
                        <a class="btn btn-link text-danger text-gradient mb-0" href="<?= BASEURL;?>/dashboard/deletegallerycraft/<?= $gallery['id_gallery']?>"><i class="far fa-trash-alt me-2"></i>Delete</a>
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
