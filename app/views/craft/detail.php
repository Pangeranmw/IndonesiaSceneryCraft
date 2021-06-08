<body style="background-color: var(--bg);">
 <div class="detail-detail container  scene">
  <div class="row mt-5">
    <div class="detail-image col-lg-5 col-md-6 col-sm-12" id="gallery">
      <div class="detail-item w-100" :style="{ backgroundImage: 'url(' + photos[activePhoto].url + ')' }">
      </div>
      <div class="row mt-2">
        <div class="owl-carousel detail owl-theme">
          <div class="d-flex flex-column thumb" 
            v-for="(photo, index) in photos"
            :key="photo.id">
            <a href="javascript:;"
              @click="changeActive(index)">
              <div class="detail-thumbnail" 
                :style="{ backgroundImage: 'url(' + photo.url + ')' }"
                :class="{ activeGallery: index == activePhoto}">
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-7 col-md-6 col-sm-12">
      <div class="detail-name fs-3 fw-semibold">
        <?= $data['craft']['nama_'.$_SESSION['lang'].'']?>
      </div>
      <?php if($data['craft']['stok']<5):?>
        <div class="detail-price fs-6 text-warning">
          Stock is almost out,  <?= $data['craft']['stok']?> pieces left
        </div>
        <?php else:?>
          <div class="detail-price fs-6 third-color">
            Stock <?= $data['craft']['stok']?>
          </div>
      <?php endif;?>
      <div class="detail-price fs-5 third-color">
        Rp. <?= $data['craft']['harga']?>
      </div>
      <div class="detail-description mt-3 fs-6">
        <h5>Description</h5>
        <?= $data['craft']['deskripsi_'.$_SESSION['lang'].'']?>
      </div>
      <form action="<?=BASEURL;?>/cart/tambah/<?=$data['craft']['id']?>" method="POST">
        <div class="detail-quantity input-group mt-2">
          <button type="button" class="minus quantity-left-minus btn btn-white btn-number rounded-left"  data-type="minus" onclick="this.parentNode.querySelector('[type=number]').stepDown();" id="decrease">
            <i class="bi bi-dash-circle"></i>
          </button>
          <input type="number" id="quantity" name="quantity" class="form-control input-number border-0 rounded-0 quantity" value="1" min="1" max="<?= $data['craft']['stok'] ?>">
          <button type="button" class="plus quantity-right-plus btn btn-white btn-number rounded-right" data-type="plus" onclick="this.parentNode.querySelector('[type=number]').stepUp();" id="increment"> 
              <i class="bi bi-plus-circle"></i>
          </button>
        </div>
        <div class="detail-cta mt-3 ">
          <button type="submit" class="btn btn-primary me-2">Add to Cart</button>
        </div>
      </form>
    </div>
  </div>
  <!-- Review Section -->
  <div class="row mt-5">
    <div class="review col-lg-12">
      <span class="fs-4 fw-semibold">Review</span>
      <div class="detail-rating row">
        <div class="col-lg-12">
        <span class="fs-2 me-2 third-color fw-bold"><?= $data['craft']['rating']?></span>
          <?php for($i =0;$i<$data['craft']['rating'];$i++) :?>
              <span class="fa fa-star" style="color: var(--third); font-size:24px;"></span>
          <?php endfor;?>
          <span class="fs-6 ms-1"><?= count($data['review'])?> Review</span>
          <button class="btn btn-third my-2 rounded-pill float-end" onclick="toggleReview()">Add Review</button>
        </div>
      </div>
    </div>
    <!-- add new review -->
      <div style="display: none;" id="toggleReview">
        <form action="<?= BASEURL?>/tambahreview/index/<?= $data['craft']['id']?>" method="POST" id="ratingForm" enctype="multipart/form-data">
          <div class="add-review mt-2 col-lg-12">
            <input type="file" name="foto" id="foto" class="form-control w-auto" accept=".jpg, .jpeg, .png">
            <div class="star-rating d-inline-flex mt-2 align-items-center form-control w-auto">
              <span class="fs-6 color-main me-2">Rating</span>
              <button type="button" class="btn third-color fa fa-star rateButton" aria-label="Left Align" style="font-size:24px;">
              </button>
              <button type="button" class="btn grey-color fa fa-star-o rateButton" aria-label="Left Align" style="font-size:24px;">
              </button>
              <button type="button" class="btn grey-color fa fa-star-o rateButton" aria-label="Left Align" style="font-size:24px;">
              </button>
              <button type="button" class="btn grey-color fa fa-star-o rateButton" aria-label="Left Align" style="font-size:24px;">
              </button>
              <button type="button" class="btn grey-color fa fa-star-o rateButton" aria-label="Left Align" style="font-size:24px;">
              </button>
              <input type="hidden" class="form-control" id="rating" name="rating" value="1">
            </div>
            <input type="text" class="form-control my-2" id="judul" name="judul" placeholder="Title" required>
            <textarea row="4" class="form-control mt-2" placeholder="Review" id="review" name="review"></textarea>
            <?php if ($_SESSION['id_user'] == null){?>
              <a href="<?= BASEURL?>/login"class="btn btn-third my-2 rounded-pill">Login to add review</a>
            <?php } else {?>
              <button class="btn btn-success my-2 rounded-pill" type="submit" id="saveReview">Submit Review</button>
            <?php }?>
          </div>
        </form>
      </div>
    <div class="col-lg-12 mt-1">
    <?php if($data['review']) :?>
        <?php foreach($data['review'] as $review) :?>
        <div class="review-list">
          <div class="review-item col-lg-12">
            <div class="name mb-1 fs-5">
            <?= $review['nama_lengkap']?>
            </div>
            <div class="rating-star d-inline-block mb-2">
              <?php for($i =0;$i<$review['rating'];$i++) :?>
                <span class="fa fa-star" style="color: var(--main); font-size:16px;"></span>
              <?php endfor;?>
            </div>
            <?php if($review['gallery']!=0):?>
            <div class="review-image d-block mb-2">
              <div class="image" style="background-image: url('<?=BASEURL;?>/assets/images/<?= $review['gallery']?>');"></div>
            </div>
            <?php endif;?>
            <div class="review-text fs-5 fw-semibold mb-2">
              <?= $review['judul']?>
            </div>
            <div class="review-text mb-2">
              <?= $review['review']?>
            </div>
            <hr>
          </div>
        </div>
        <?php endforeach;?>
      <?php endif;?>
    </div>
  </div>
</div>
<script src="<?= BASEURL;?>/assets/vendor/vue.min.js"></script>
<script src="<?= BASEURL;?>/assets/vendor/jquery.min.js"></script>
<script src="<?= BASEURL;?>/assets/vendor/owlcarousel/owl.carousel.min.js"></script>
<script>
  // implement start rating select/deselect
  $( ".rateButton" ).click(function() {
		if($(this).hasClass('grey-color')) {			
			$(this).removeClass('grey-color fa-star-o').addClass('third-color fa-star star-selected');
			$(this).prevAll('.rateButton').removeClass('grey-color fa-star-o').addClass('third-color fa-star star-selected');
			$(this).nextAll('.rateButton').removeClass('third-color fa-star star-selected').addClass('grey-color fa-star-o');			
		} else {
			$(this).nextAll('.rateButton').removeClass('third-color fa-star star-selected').addClass('grey-color fa-star-o');
		}
		$("#rating").val($('.star-selected').length);
	});
  // save review using Ajax
	$('#ratingForm').on('submit', function(event){
		event.preventDefault();
		// var formData = $(this).serialize();
		$.ajax({
			type : 'POST',
			url : '<?= BASEURL?>/addreviewcraft/index/<?= $data['craft']['id']?>',
			data:  new FormData(this),
			dataType: "json",	
      contentType: false,
      cache: false,
      processData:false,

			success:function(response){
				if(response.success == 1) {
					$("#ratingForm")[0].reset();
					window.location='<?=BASEURL?>/craft/detail/<?=$data['craft']['id']?>'
				}
			}
		});		
	});

  // gallery
  var gallery = new Vue({
    el: "#gallery",
    data: {
      activePhoto: 0,
      photos: [
        <?php for($i=0; $i<count($data['gallery']); $i++):?> {
          id: <?=$i?>,
          url: "<?=BASEURL?>/assets/images/<?=$data['gallery'][$i]['foto']?>",
        },
        <?php endfor;?>
      ],
    },
    methods: {
      changeActive(id) {
      this.activePhoto = id;
      },
    },
  });
  $(document).ready(function () {
    $(".owl-carousel").owlCarousel({
      margin: 20,
      nav: false,
      dots: false,
      responsiveClass: true,
      responsive: {
          0: {
              items: 3,
          },
          600: {
              items: 3,
          },
          1000: {
              items: 5,
          },
      },
      navText: [
          "<img src=''. BASEURL .'/assets/images/prev.png'>",
          "<img src=''. BASEURL .'/assets/images/next.png'>",
      ],
    });
  });
</script>
