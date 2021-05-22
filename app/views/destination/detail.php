<body style="background-color: var(--bg);">
 <div class="destination-detail container">
  <div class="row my-5 justify-content-center align-items-center">
    <div class="detail-image col-lg-8 col-md-6 col-sm-12" id="gallery">
      <!-- <zoom-on-hover class="detail-item w-100":style="{ backgroundImage: 'url(' + photos[activePhoto].url + ')' }" img-normal="photos[activePhoto].url" ></zoom-on-hover> -->
      <!-- <zoom-on-hover class="detail-item w-100" :style="{ backgroundImage: 'url(' + photos[activePhoto].url + ')' }"></zoom-on-hover> -->
      <div class="detail-item position-relative" :style="{ backgroundImage: 'url(' + photos[activePhoto].url + ')' }">
        <div class="location-cta btn-primary w-50 d-inline p-3">
          <i class="fas fa-map-marker-alt d-inline fs-5"></i>
          <a class="nav-link d-inline fs-5 p-1" href="https://goo.gl/maps/i83icx3Jzp3BxrVJ9" target="blank">
            View Location
          </a>
        </div>
      </div>
      <div class="row mt-2">
        <div class="owl-carousel detail owl-theme">
          <div class="d-flex flex-column" 
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
</div>
<div class="row justify-content-center align-items-center">
  <div class="col-lg-10 col-md-6 col-sm-12">
    <div class="culture-description">
      <div class="culture-title text-center mb-4">
        <h4>Pantai anuk</h4>
      </div>
      <div class="culture-information fs-5 font-read">
        Pantai Anuk memiliki garis pantai yang cukup panjang. Pasir pantainya yang bersih menjadi tempat yang cocok untuk bersantai menikmati pemandangan laut yang mungkin jarang kita dapati di daerah lain. Di beberapa titik juga terdapat pohon-pohon yang tumbuh cukup rimbun. Tentu saja tempat ini juga sangat cocok untuk aktifitas piknik keluarga. Namun jangan sekali-kali meninggalkan sampah bekas makanan yang dapat merusak dan mengotori pantai.
        <br> <br>
        Pantai anuk memiliki bentuk pantai layaknya teluk, air lautnya cukup tenang dengan ombak kecil yang menyapu pantai. Kondisi seperti ini sangat cocok bagi para pengunjung yang ingin berenang atau sekedar berrendam serta bermain air di sekitar tepi pantai. Meskipun cukup aman untuk berenang, namun para wisatawan harus tetap berhati-hati karena terdapat batas wilayah untuk berenang.
        <br> <br>
      </div>
    </div>
  </div>
</div>
  <!-- Review Section -->
  <div class="row mt-5">
    <div class="review col-lg-12">
      <span class="fs-4 fw-semibold">Review</span>
      <div class="detail-rating row">
        <div class="col-lg-12">
          <span class="fs-2 me-2 third-color fw-bold">3</span>
          <span class="fa fa-star" style="color: var(--third); font-size:24px;"></span>
          <span class="fa fa-star" style="color: var(--third); font-size:24px;"></span>
          <span class="fa fa-star" style="color: var(--third); font-size:24px;"></span>
          <span class="fs-6 ms-1">1 Review</span> 
        </div>
      </div>
    </div>
    <div class="col-lg-12 mt-1">
      <div class="review-list">
        <div class="review-item col-lg-12">
          <div class="name mb-1 fs-5">
            Lalu Rizki Aldi
          </div>
          <div class="rating-star d-inline-block mb-2">
            <span class="fa fa-star" style="color: var(--main); font-size:16px;"></span>
            <span class="fa fa-star" style="color: var(--main); font-size:16px;"></span>
            <span class="fa fa-star" style="color: var(--main); font-size:16px;"></span>
          </div>
          <div class="review-image d-block mb-2">
            <div class="image" style="background-image: url('<?=BASEURL;?>/assets/images/beach.jpg');"></div>
          </div>
          <div class="review-text mb-2">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae, numquam consequatur quibusdam assumenda vel facilis, molestias libero sit culpa neque iure temporibus pariatur! Vitae, ad! Recusandae excepturi debitis aspernatur blanditiis.
          </div>
          <hr>
        </div>
      </div>
      <!-- add new review -->
      <form action="" method="POST" enctype="multipart/form-data" id="upload_review">
        <div class="add-review mt-2 col-lg-12">
          <input type="file" name="foto[]" id="foto" class="form-control w-auto" multiple accept=".jpg, .jpeg, .png">
          <div class="star-rating d-inline-flex mt-2 align-items-center form-control w-auto">
            <span class="fs-6 color-main me-2">Rating</span>
            <span class="fa fa-star-o" data-rating="1" style="color: var(--third); font-size:24px;"></span>
            <span class="fa fa-star-o" data-rating="2" style="color: var(--third); font-size:24px;"></span>
            <span class="fa fa-star-o" data-rating="3" style="color: var(--third); font-size:24px;"></span>
            <span class="fa fa-star-o" data-rating="4" style="color: var(--third); font-size:24px;"></span>
            <span class="fa fa-star-o" data-rating="5" style="color: var(--third); font-size:24px;"></span>
            <input type="hidden" name="whatever3" class="rating-value" value="1">
          </div>
          <input type="hidden" name="craft_id" id="craft_id" value="<?=$craft['id']?>">
          <textarea row="2" class="form-control mt-2" id="review" name="review"></textarea>
          <button class="btn btn-third mt-2 rounded-pill">Login to add review</button>
          <button class="btn btn-success mt-2 rounded-pill" type="submit" id="submit_review">Submit Review</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="<?= BASEURL;?>/assets/vendor/vue.min.js"></script>
<script src="<?= BASEURL;?>/assets/vendor/jquery.min.js"></script>
<script src="<?= BASEURL;?>/assets/vendor/owlcarousel/owl.carousel.min.js"></script>
<script>
  // gallery
  var gallery = new Vue({
    el: "#gallery",
    data: {
      hover: false,
      activePhoto: 0,
      photos: [
        {
          id: 0,
          url: "<?= BASEURL;?>/assets/images/beach.jpg"
        },
        {
          id: 1,
          url: "<?= BASEURL;?>/assets/images/beach2.jpg"
        },
        {
          id: 2,
          url: "<?= BASEURL;?>/assets/images/beach.jpg"
        },
        {
          id: 3,
          url: "<?= BASEURL;?>/assets/images/beach2.jpg"
        },
        {
          id: 4,
          url: "<?= BASEURL;?>/assets/images/beach.jpg"
        },
      // @foreach($product->galleries as $gallery)  
      //   {
      //       id: {{ $gallery->id }},
      //       url: "{{ Storage::url($gallery->photos) }}",
      //   },
      // @endforeach
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
          "<img src='http://localhost/ISC/public/assets/images/prev.png'>",
          "<img src='http://localhost/ISC/public/assets/images/next.png'>",
      ],
    });
  });

  // submit review ajax
  var $star_rating = $('.star-rating .fa');
  var SetRatingStar = function() {
    return $star_rating.each(function() {
      if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
        return $(this).removeClass('fa-star-o').addClass('fa-star');
      } else {
        return $(this).removeClass('fa-star').addClass('fa-star-o');
      }
    });
  };

  $star_rating.on('click', function() {
    $star_rating.siblings('input.rating-value').val($(this).data('rating'));
    return SetRatingStar();
  });

  SetRatingStar();
  $(document).ready(function() {
  });

  $("#submit_review").click(function() {
    var $star_rating = $('.star-rating .fa');
    var rating = parseInt($star_rating.siblings('input.rating-value').val());
    var photo= $('#foto').val();
    var review= $('#review').val();
    var craft_id= $('#craft_id').val();
    if(rating>0 && review!="" && photo!=""){
      $.ajax({
        url: "submit_review.php",
        type: "POST",
        contentType: false,
        cache: fale,
        processData: false, 
        data: {
          rate: rating,
          photo:foto,
          review:review,
          craft_id:craft_id
        },
        success : function(data){
          alert(data);
          location.reload();	
        }
      });
    }
    else{
      alert('Please add your review, photo, and rating!');
    }
  });
  $(".selected").click(function() {
    var selected = $(this).hasClass("highlight");
    $(".selected").removeClass("highlight");
    if(!selected){
        $(this).addClass("highlight");
    }
  });
  
  // // add star rating 
  // var ratedIndex = -1, uID = 0;
  // $(document).ready(function () {
  //   resetStarColors();
  //   if (localStorage.getItem('ratedIndex') != null) {
  //     setStars(parseInt(localStorage.getItem('ratedIndex')));
  //     uID = localStorage.getItem('uID');
  //   }
  //   $('.fa-star').on('click', function () {
  //     ratedIndex = parseInt($(this).data('index'));
  //     localStorage.setItem('ratedIndex', ratedIndex);
  //     saveToTheDB();
  //   });
  //   $('.fa-star').mouseover(function () {
  //     resetStarColors();
  //     var currentIndex = parseInt($(this).data('index'));
  //     setStars(currentIndex);
  //   });
  //   $('.fa-star').mouseleave(function () {
  //     resetStarColors();
  //     if (ratedIndex != -1)
  //       setStars(ratedIndex);
  //   });
  // });
  // function saveToTheDB() {
  //   $.ajax({
  //     url: "index.php",
  //     method: "POST",
  //     dataType: 'json',
  //     data: {
  //       save: 1,
  //       uID: uID,
  //       ratedIndex: ratedIndex
  //     }, success: function (r) {
  //       uID = r.id;
  //       localStorage.setItem('uID', uID);
  //     }
  //   });
  // }
  // function setStars(max) {
  //   for (var i=0; i <= max; i++)
  //     $('.fa-star:eq('+i+')').css({'color': 'var(--third)'});
  // }
  // function resetStarColors() {
  //   $('.fa-star').css('color', 'var(--main)');
  // }
</script>
