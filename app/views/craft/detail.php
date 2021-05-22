<body style="background-color: var(--bg);">
 <div class="detail-detail container">
  <div class="row mt-5">
    <div class="detail-image col-lg-5 col-md-6 col-sm-12" id="gallery">
      <!-- <zoom-on-hover class="detail-item w-100":style="{ backgroundImage: 'url(' + photos[activePhoto].url + ')' }" img-normal="photos[activePhoto].url" ></zoom-on-hover> -->
      <!-- <zoom-on-hover class="detail-item w-100" :style="{ backgroundImage: 'url(' + photos[activePhoto].url + ')' }"></zoom-on-hover> -->
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
        Tas Ketas
      </div>
      <div class="detail-price fs-5 third-color">
        Rp. 200000
      </div>
      <div class="detail-description mt-3 fs-6">
        <h5>Description</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, mollitia. Cum ex labore non? Nesciunt tenetur nulla culpa, iusto, adipisci odio excepturi voluptatum, fugit expedita commodi dolorum tempora nobis modi!</p>
      </div>
      <form action="" name="cart">
        <div class="detail-quantity input-group mt-2">
          <span class="input-group-btn">
            <button type="button" class="quantity-left-minus btn btn-white btn-number rounded-left"  data-type="minus" data-field="">
              <i class="bi bi-dash-circle"></i>
            </button>
          </span>
          <input type="text" id="quantity" name="quantity" class="form-control input-number border-0" value="1" min="1" max="100">
            <span class="input-group-btn">
              <button type="button" class="quantity-right-plus btn btn-white btn-number rounded-right" data-type="plus" data-field="">
                  <i class="bi bi-plus-circle"></i>
              </button>
            </span>
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
          <div class="rating d-inline-block mb-2">
            <span class="fa fa-star" style="color: var(--main); font-size:16px;"></span>
            <span class="fa fa-star" style="color: var(--main); font-size:16px;"></span>
            <span class="fa fa-star" style="color: var(--main); font-size:16px;"></span>
          </div>
          <div class="review-image d-block mb-2">
            <div class="image" style="background-image: url('<?=BASEURL;?>/assets/images/ketak.jpeg');"></div>
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
          url: "<?= BASEURL;?>/assets/images/ketak.jpeg"
        },
        {
          id: 1,
          url: "<?= BASEURL;?>/assets/images/songket.jpeg"
        },
        {
          id: 2,
          url: "<?= BASEURL;?>/assets/images/slingbag.jpeg"
        },
        {
          id: 3,
          url: "<?= BASEURL;?>/assets/images/ketak.jpeg"
        },
        {
          id: 4,
          url: "<?= BASEURL;?>/assets/images/slingbag.jpeg"
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

  // quantity
  $(document).ready(function(){
    var quantitiy=0;
    $('.quantity-right-plus').click(function(e){
      e.preventDefault();
      var quantity = parseInt($('#quantity').val());
      $('#quantity').val(quantity + 1);
    });

    $('.quantity-left-minus').click(function(e){
      e.preventDefault();
      var quantity = parseInt($('#quantity').val());
      if(quantity>0){
      $('#quantity').val(quantity - 1);
      }
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
