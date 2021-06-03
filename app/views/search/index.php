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
    <div class="culture-search row mt-3">
      <h4 class="text-center my-2">Culture</h4>
      <!-- Looping -->
      <div class="search col-lg-4">
        <div class="culture-section card p-3 mb-4">
          <div class="culture-content row">
            <div class="culture-image col-12">
              <div class="image" style="background-image: url('<?=BASEURL;?>/assets/images/peresean.jpg');">
                <div class="star py-1 px-3">
                  <img class="" src="<?=BASEURL;?>/assets/images/ic-stargreen.svg" alt="">
                  <p class="d-inline-block third-color">5 Stars</p>
                </div>
              </div>
            </div>
            <div class="text col-12">
              <div class="category my-3">
                <span class="py-1 px-3 rounded-pill">
                  Lombok
                  <!-- <?= $search['nama_kabupaten']?>, <?= $search['nama_provinsi']?> -->
                </span>
              </div>
              <div class="name fs-3 fw-semibold">
                Halo
                <!-- <?= $search['nama_'.$_SESSION['lang'].'']?> -->
              </div>
              <div class="description fs-6 mb-2">
                <?= limit_text('Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, velit sint? Minus a distinctio vel quis facere ex tempore, saepe explicabo nihil sit assumenda totam sunt inventore dolorum sapiente dolore.', 20)?>
              </div>
              <a 
              href="<?=BASEURL;?>/culture/detail/<?= $culture['id']?>" 
              class="btn btn-third py-2 px-3 fw-semibold">
              Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="destination-search row mt-3">
      <h4 class="text-center my-2">Destination</h4>
      <!-- Looping -->
      <div class="search col-lg-4">
        <div class="destination-section card p-3 mb-4">
          <div class="destination-content row">
            <div class="destination-image col-12">
              <div class="image" style="background-image: url('<?=BASEURL;?>/assets/images/peresean.jpg');">
                <div class="star py-1 px-3">
                  <img class="" src="<?=BASEURL;?>/assets/images/ic-stargreen.svg" alt="">
                  <p class="d-inline-block third-color">5 Stars</p>
                </div>
              </div>
            </div>
            <div class="text col-12">
              <div class="category my-3">
                <span class="py-1 px-3 rounded-pill">
                  Lombok
                  <!-- <?= $search['nama_kabupaten']?>, <?= $search['nama_provinsi']?> -->
                </span>
              </div>
              <div class="name fs-3 fw-semibold">
                Halo
                <!-- <?= $search['nama_'.$_SESSION['lang'].'']?> -->
              </div>
              <div class="description fs-6 mb-2">
                <?= limit_text('Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, velit sint? Minus a distinctio vel quis facere ex tempore, saepe explicabo nihil sit assumenda totam sunt inventore dolorum sapiente dolore.', 20)?>
              </div>
              <a 
              href="<?=BASEURL;?>/destination/detail/<?= $culture['id']?>" 
              class="btn btn-third py-2 px-3 fw-semibold">
              Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="craft-search row mt-3">
      <h4 class="text-center my-2">Craft</h4>
      <!-- Looping -->
      <div class="search col-lg-3">
        <div class="craft-content card p-3">
          <a href="<?=BASEURL;?>/craft/detail/<?= $craft['id_kerajinan']?>" class="link-primary mt-1">
            <div class="image rounded" style="background-image: url('<?=BASEURL;?>/assets/images/ketak.jpeg');">
            </div>
            <div class="star mt-1">
              <img src="<?=BASEURL;?>/assets/images/ic-greystar.svg" alt="">
              <!-- <?php for($i = 0;$i<$craft['rating'];$i++):?> -->
              <!-- <?php endfor;?> -->
            </div>
            <div class="name fs-5 fw-semibold">
              Nama
              <!-- <?= $craft['nama_'.$_SESSION['lang'].'']?> -->
            </div>
            <div class="price main mt-1">
              Rp. 200000
              <!-- <?= str_replace(',','.',number_format($craft['harga']))?> -->
            </div>
          </a>
          <?php if ($_SESSION['id_user'] == null){?>
            <a href="<?= BASEURL?>/login"class="btn btn-third mt-2 rounded-pill">Login to add craft</a>
          <?php } else {?>
            <a href="<?=BASEURL;?>/cart/tambah/<?= $craft['id_kerajinan']?>/1" class="mt-1 btn btn-third py-2 px-2 fw-semibold w-50">Add to Cart</a>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
