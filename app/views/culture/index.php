<style>
.styled-select {
  background: url('<?=BASEURL;?>/assets/images/arrowblack.svg') no-repeat right white;
  position: relative;
  background-position-x: 95%;
  background-size: 0.8em;
}
</style>
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
      <aside class="filter-category col-lg-3 col-md-3 col-sm-12">
        <div class="filter-content card p-3 ">
          <div class="location">
            <button class="btn btn-toggle align-items-center rounded collapsed main w-100" data-bs-toggle="collapse" data-bs-target="#location">
              Location
            </button>
            <div class="collapse" id="location">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <form action="<?= BASEURL; ?>/culture" class="form-group" name="lokasi" method="post"> 
                  <!-- Looping -->
                  <?php foreach($data['daerah'] as $culture) :?>
                  <li class="category-list">
                    <div class="form-check ">
                      <input class="form-check-input" name="lokasi[]" type="checkbox" value="<?= $culture['id_provinsi']?>" id="lokasi">
                      <label class="form-check-label fs-6 main" >
                        <?= $culture['nama_provinsi']?>
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
                          <div class="text fs-3 d-inline-block">
                            A
                          </div>
                          <!-- Looping -->
                          <div class="location-content d-flex flex-wrap justify-content-between align-items-center">
                            <div class="form-check m-2">
                              <input class="form-check-input" name="lokasi" type="checkbox" value="Ampenan" id="">
                              <label class="form-check-label fs-6 main" for="">
                                Ampenan
                              </label>
                            </div>
                          </div>
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
        </div>
      </aside>
      <div class="culture col-lg-9 col-md-9 col-sm-12">

        <div class="category-selected">
          <form action="" class="mb-3" name="sortby"> 
            <!-- Looping if category select-->
            
            <?php if (!is_null($data['label'])) : ?>
                <?php foreach($data['label'] as $label) :?>
                  <div class="card px-4 py-3 w-auto d-inline-block category-item " id="category-item">
                    <p class="d-inline-block m-0 main"><?= $label['nama_provinsi']?></p>
                    <button class="btn close" id='closelabel' style="background-image: url('<?=BASEURL;?>/assets/images/closeicon.svg');"></button>
                  </div>
                <?php endforeach;?>
            <?php endif;?>
            <!-- End Looping -->
          </form>
        </div>
        <?php foreach($data['culture'] as $culture) :?>
        <div class="culture-section card p-3 mb-4">

          <!-- Looping -->
          <div class="culture-content row">
            <div class="culture-image col-lg-4 col-md-4 col-sm-6">
              <div class="image" style="background-image: url('<?=BASEURL;?>/assets/images/<?= $culture['gallery']?>');">
              <div class="star py-1 px-3">
                <img class="" src="<?=BASEURL;?>/assets/images/ic-stargreen.svg" alt="">
                <p class="d-inline-block third-color"><?= $culture['rating']?> Stars</p>
              </div>
              </div>
            </div>
            <div class="text col-lg-8 col-md-8 col-sm-6">
              <div class="category mb-2">
                <span class="py-1 px-3 rounded-pill"><?= $culture['nama_kabupaten']?>, <?= $culture['nama_provinsi']?></span>
              </div>
              <div class="name fs-3 fw-semibold">
                <?= $culture['nama_'.$_SESSION['lang'].'']?>
              </div>
              <div class="description fs-6 mb-2">
                <?= limit_text($culture['artikel_'.$_SESSION['lang'].''], 30)?>
              </div>
              <a href="<?=BASEURL;?>/culture/detail/<?= $culture['id']?>" class="btn btn-third py-2 px-3 fw-semibold">Read More</a>
            </div>
          </div>
          <!-- End Looping -->
        </div>
        <?php endforeach;?>
      </div>
    </div>
  </div>

