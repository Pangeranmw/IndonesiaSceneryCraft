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
    
    <?php if(empty($data['budaya']) && empty($data['destinasi']) && empty($data['kerajinan'])):?>
      <p class="text-center my-5 py-5">Sorry, But We Don't Found Any Results For "<?=$_SESSION['search'];?>"</p>
    <?php endif;?>

    <?php if(!empty($data['budaya'])):?>
    <div class="culture-search row mt-3">
      <h4 class="text-center my-2">Culture</h4>
      <!-- Looping -->
      <?php foreach ($data['budaya'] as $budaya) : ?>
      <div class="search col-lg-4">
        <div class="culture-section card p-3 mb-4">
          <div class="culture-content row">
            <div class="culture-image col-12">
              <div class="image" style="background-image: url('<?=BASEURL;?>/assets/images/<?= $budaya['gallery']?>');">
                <div class="star py-1 px-3">
                  <img class="" src="<?=BASEURL;?>/assets/images/ic-stargreen.svg" alt="">
                  <p class="d-inline-block third-color"><?= $budaya['rating']?> Stars</p>
                </div>
              </div>
            </div>
            <div class="text col-12">
              <div class="category my-3">
                <span class="py-1 px-3 rounded-pill">
                <?= $budaya['nama_kabupaten']?>
                  <!-- <?= $search['nama_kabupaten']?>, <?= $search['nama_provinsi']?> -->
                </span>
              </div>
              <div class="name fs-3 fw-semibold">
              <?= $budaya['nama_'.$_SESSION['lang']]?>
                <!-- <?= $search['nama_'.$_SESSION['lang'].'']?> -->
              </div>
              <div class="description fs-6 mb-2">
                <?= limit_text($budaya['artikel_'.$_SESSION['lang']], 20)?>
              </div>
              <a 
              href="<?=BASEURL;?>/culture/detail/<?= $budaya['id']?>" 
              class="btn btn-third py-2 px-3 fw-semibold">
              Read More
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach;?>
    </div>
    <?php endif;?>
    <?php if(!empty($data['destinasi'])):?>
    <div class="destination-search row mt-3">
      <h4 class="text-center my-2">Destination</h4>
      <!-- Looping -->
      <?php foreach ($data['destinasi'] as $destinasi) : ?>
      <div class="search col-lg-4">
        <div class="destination-section card p-3 mb-4">
          <div class="destination-content row">
            <div class="destination-image col-12">
              <div class="image" style="background-image: url('<?=BASEURL;?>/assets/images/<?= $destinasi['gallery']?>');">
                <div class="star py-1 px-3">
                  <img class="" src="<?=BASEURL;?>/assets/images/ic-stargreen.svg" alt="">
                  <p class="d-inline-block third-color"><?= $destinasi['rating']?> Stars</p>
                </div>
              </div>
            </div>
            <div class="text col-12">
              <div class="category my-3">
                <span class="py-1 px-3 rounded-pill">
                  <?= $destinasi['nama_kabupaten']?>
                  <!-- <?= $search['nama_kabupaten']?>, <?= $search['nama_provinsi']?> -->
                </span>
              </div>
              <div class="name fs-3 fw-semibold">
                <?= $destinasi['nama_'.$_SESSION['lang']]?>
                <!-- <?= $search['nama_'.$_SESSION['lang']]?> -->
              </div>
              <div class="description fs-6 mb-2">
                <?= limit_text($destinasi['artikel_'.$_SESSION['lang']], 20)?>
              </div>
              <a 
              href="<?=BASEURL;?>/destination/detail/<?= $destinasi['id']?>" 
              class="btn btn-third py-2 px-3 fw-semibold">
              Read More
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach;?>
     </div>
    <?php endif;?>
    <?php if(!empty($data['kerajinan'])):?>
    <div class="craft-search row mt-3">
      <h4 class="text-center my-2">Craft</h4>
      <!-- Looping -->
      <?php foreach ($data['kerajinan'] as $craft) : ?>
      <div class="search col-lg-3">
        <div class="craft-content card p-3">
          <a href="<?=BASEURL;?>/craft/detail/<?= $craft['id_kerajinan']?>" class="link-primary mt-1">
            <div class="image rounded" style="background-image: url('<?=BASEURL;?>/assets/images/<?= $craft['gallery']?>');">
            </div>
            <div class="star mt-1">
              <?php for($i = 0;$i<$craft['rating'];$i++):?> 
                <img src="<?=BASEURL;?>/assets/images/ic-greystar.svg" alt="">
              <?php endfor;?> 
            </div>
            <div class="name fs-5 fw-semibold">
              <?= $craft['nama_'.$_SESSION['lang']]?>
              <!-- <?= $craft['nama_'.$_SESSION['lang'].'']?> -->
            </div>
            <div class="price main mt-1">
              Rp. <?= str_replace(',','.',number_format($craft['harga']))?>
            </div>
          </a>
          <?php if ($_SESSION['id_user'] == null){?>
            <a href="<?= BASEURL?>/login"class="btn btn-third mt-2 rounded-pill">Login to add craft</a>
          <?php } else {?>
            <a href="<?=BASEURL;?>/cart/tambah/<?= $craft['id_kerajinan']?>/1" class="mt-1 btn btn-third py-2 px-2 fw-semibold w-50">Add to Cart</a>
          <?php }?>
        </div>
      </div>
      <?php endforeach;?>
    </div>
  <?php endif;?>
  </div>
