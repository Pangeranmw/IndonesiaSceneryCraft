<style>
.styled-select {
  background: url('<?=BASEURL;?>/assets/images/arrowblack.svg') no-repeat right white;
  position: relative;
  background-position-x: 95%;
  background-size: 0.8em;
}
</style>
<body style="background-color: var(--bg);">
  <div class="scene container">
    <div class="row d-flex align-items-center">
      <span class="col-lg-3 col-md-3 col-sm-12">
        <span class="filter-title main fw-semibold">Filter</span>
      </span>
      <div class="col-lg-9 col-md-9 col-sm-12">
        <form action="" class="float-right" name="sortby" method="post"> 
          <span class="sort-by d-inline-block main fw-semibold">Sort By:</span>
          <span class="sort-by d-inline-block">
            <select class="styled-select card px-4 py-2 d-inline-block main" id="sortby" name="sortby" onchange='this.form.submit()' >
              <option value="MostRelevance" <?php if($_SESSION['sortby']=='MostRelevance') echo 'selected'?>>Most Relevance</option>
              <option value="Recommended" <?php if($_SESSION['sortby']=='Recommended') echo 'selected'?>>Recommended</option>
              <option value="LowestPrice" <?php if($_SESSION['sortby']=='LowestPrice') echo 'selected'?>>Lowest Price</option>
              <option value="HighestPrice" <?php if($_SESSION['sortby']=='HighestPrice') echo 'selected'?>>Highest Price</option>
            </select>
            <noscript><input type="submit" value="Submit"></noscript>
          </span>
        </form>
      </div>
    </div>
    <!-- <div class="row">
      <span class="filter-title main fw-semibold">Filter</span>
    </div> -->
    <div class="row mt-3">
      <aside class="filter-category col-lg-2 col-md-2 col-sm-12">
        <div class="filter-content card p-3 ">
          <div class="location">
            <button class="btn btn-toggle align-items-center rounded collapsed main w-100" data-bs-toggle="collapse" data-bs-target="#location">
              Location
            </button>
            <div class="collapse" id="location">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <form action="<?= BASEURL?>/craft" class="form-group" name="lokasi" method="post"> 
                  <!-- Looping -->
                  <?php foreach($data['daerah'] as $daerah) :?>
                  <li class="category-list">
                    <div class="form-check">
                      <input class="form-check-input" name="lokasi[]" type="checkbox" value="<?= $daerah['id_kabupaten']?>" id="<?= $daerah['id_kabupaten']?>">
                      <label class="form-check-label fs-6 main" for="<?= $daerah['id_kabupaten']?>">
                        <?= ucwords(strtolower($daerah['nama_kabupaten']))?>
                      </label>
                    </div>
                  </li>
                  <?php endforeach;?>
                  <!-- End Looping -->
                  <li class="category-list">
                    <a class="fw-light link-primary my-1" data-bs-toggle="modal" data-bs-target="#locationModal">See more..</a>
                  </li>
                  <div class="modal" id="locationModal" aria-labelledby="locationLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="locationLabel">Location</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <!-- Looping -->
                          <?php foreach(range('A','Z') as $char) :?>
                            <?php if(!empty($data[$char])):?>
                            <div class="text fs-3 d-inline-block">
                              <?= $char?>
                            </div>
                          <?php endif;?>
                            <!-- Looping -->
                            <div class="location-content d-flex flex-wrap align-items-center">
                                <?php foreach($data[$char] as $daerah) :?>
                                <div class="form-check m-2">
                                  <input class="form-check-input" name="lokasi[]" type="checkbox" value="<?=$daerah['id']?>" id="<?= $daerah['id']?>">
                                  <label class="form-check-label fs-6 main" for="<?= $daerah['id']?>">
                                    <?= ucwords(strtolower($daerah['nama_kabupaten']))?>
                                  </label>
                                </div>
                                <?php endforeach;?>
                              </div>
                          <?php endforeach;?>
                          <!-- End Looping -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <li class="category-list">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </li>
                </form>
              </ul>
            </div>
          </div>
          <div class="variety">
            <button class="btn btn-toggle align-items-center rounded collapsed main w-100" data-bs-toggle="collapse" data-bs-target="#variety">
              Variety
            </button>
            <div class="collapse" id="variety">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <form action="<?= BASEURL?>/craft" class="" name="kategori" method="post"> 
                  <!-- Looping -->
                  <?php foreach($data['kategori'] as $kategori) :?>
                  <li class="category-list">
                    <div class="form-check ">
                      <input class="form-check-input" name="kategori[]" type="checkbox" value="<?= $kategori['id_kategori'] ?>" id="<?= $kategori['id_kategori'] ?>">
                      <label class="form-check-label fs-6 main" for="<?= $kategori['id_kategori'] ?>">
                        <?= $kategori['kategori_'.$_SESSION['lang'].'']?>
                      </label>
                    </div>
                  </li>
                  <?php endforeach;?>
                  <!-- End Looping -->
                  <li class="category-list">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </li>
                </form>
              </ul>
            </div>
          </div>
        </div>
      </aside>
      <div class="craft col-lg-10 col-md-10 col-sm-12">

        <div class="category-selected mb-2" id="category-selected">
          <form action="" class="" name="sortby"> 
            <!-- Looping if category select-->
            <?php if(isset($_POST['lokasi'])) :?>
              <?php foreach($data['label'] as $label)  :?>
              <div class="card px-4 py-3 w-auto d-inline-block category-item " id="category-item">
                <p class="d-inline-block m-0 main"><?= ucwords(strtolower($label['nama_kabupaten']))?></p>
                <button class="btn close" style="background-image: url('<?=BASEURL;?>/assets/images/closeicon.svg');"></button>
              </div>
              <?php endforeach;?>
            <?php endif ;?>
            <?php if(isset($_POST['kategori'])) :?>
              <?php foreach($data['label_kategori'] as $label)  :?>
              <div class="card px-4 py-3 w-auto d-inline-block category-item " id="category-item">
                <p class="d-inline-block m-0 main"><?= $label['kategori_'.$_SESSION['lang']]?></p>
                <button class="btn close" style="background-image: url('<?=BASEURL;?>/assets/images/closeicon.svg');"></button>
              </div>
              <?php endforeach;?>
            <?php endif ;?>
            <!-- End Looping -->
          </form>
        </div>
        
        <div class="craft-section p-2">
          <div class="row">
            <!-- Looping -->
            <?php foreach($data['craft'] as $craft) :?>
            <div class="craft-content p-1 col-lg-3 col-md-4 col-sm-6">
              <div class="card p-3">
                <a href="<?=BASEURL;?>/craft/detail/<?= $craft['id_kerajinan']?>" class="link-primary mt-1">
                  <div class="image rounded" style="background-image: url('<?=BASEURL;?>/assets/images/<?= $craft['gallery']?>');">
                  </div>
                  <div class="star mt-1">
                    <?php for($i = 0;$i<$craft['rating'];$i++):?>
                      <img src="<?=BASEURL;?>/assets/images/ic-greystar.svg" alt="">
                    <?php endfor;?>
                  </div>
                  <div class="name fs-5 fw-semibold">
                    <?= $craft['nama_'.$_SESSION['lang'].'']?>
                  </div>
                  <div class="price main mt-1">
                    Rp. <?= str_replace(',','.',number_format($craft['harga']))?>
                  </div>
                </a>
                <?php if ($_SESSION['id_user'] == null){?>
                  <a href="<?= BASEURL?>/login"class="btn btn-third mt-2 rounded-pill">Login to add craft</a>
                <?php } else {?>
                  <a href="<?=BASEURL;?>/cart/tambah/<?= $craft['id_kerajinan']?>" class="mt-1 btn btn-third py-2 px-2 fw-semibold w-50">Add to Cart</a>
                <?php }?>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- End Looping -->
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
