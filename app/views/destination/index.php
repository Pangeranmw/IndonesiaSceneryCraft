<body style="background-color: var(--bg);">
  <div class="destination container">
    <div class="d-flex row">
      <span class="fs-6 main fw-semibold">Filter</span>
      <aside class="col-lg-3 col-md-3 col-sm-12">
        <div class="card p-3">
          <button class="btn btn-toggle align-items-center rounded collapsed main" data-bs-toggle="collapse" data-bs-target="#location" aria-expanded="true">
            Location
          </button>
          <div class="collapse show" id="location">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <form action="" class="form-group" name="lokasi"> 
                <li class="category-list">
                  <div class="form-check ">
                    <input class="form-check-input" name="lokasi" type="checkbox" value="Mataram" id="">
                    <label class="form-check-label fs-6 main" for="">
                      Mataram
                    </label>
                  </div>
                  <div class="form-check ">
                    <input class="form-check-input" name="lokasi" type="checkbox" value="Ampenan" id="">
                    <label class="form-check-label fs-6 main" for="">
                      Ampenan
                    </label>
                  </div>
                  <div class="form-check ">
                    <input class="form-check-input" name="lokasi" type="checkbox" value="Bali" id="">
                    <label class="form-check-label fs-6 main" for="">
                      Bali
                    </label>
                  </div>
                  <div class="form-check ">
                    <input class="form-check-input" name="lokasi" type="checkbox" value="Jawa" id="">
                    <label class="form-check-label fs-6 main" for="">
                      Jawa
                    </label>
                  </div>
                </li>
                <li class="category-list">
                  <a class="fw-light link-primary" data-bs-toggle="modal" data-bs-target="#locationModal">See more..</a>
                </li>
                <div class="modal" id="locationModal" tabindex="-1" aria-labelledby="locationLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="locationLabel">Location</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="text fs-3 d-inline-block">
                          A
                        </div>
                        <div class="location-content d-flex flex-wrap justify-content-between align-items-center">
                          <div class="form-check m-2">
                            <input class="form-check-input" name="lokasi" type="radio" value="Ampenan" id="">
                            <label class="form-check-label fs-6 main" for="">
                              Ampenan
                            </label>
                          </div>
                        </div>
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
          <button class="btn btn-toggle align-items-center rounded collapsed main" data-bs-toggle="collapse" data-bs-target="#variety" aria-expanded="true">
            Variety
          </button>
          <div class="collapse show" id="variety">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <form action="" class="" name="kategori"> 
                <li class="category-list">
                  <div class="form-check ">
                    <input class="form-check-input" name="kategori" type="checkbox" value="beach" id="">
                    <label class="form-check-label fs-6 main" for="">
                      Beach
                    </label>
                  </div>
                </li>
                <li class="category-list">
                  <div class="form-check ">
                    <input class="form-check-input" name="kategori" type="checkbox" value="Mountain" id="">
                    <label class="form-check-label fs-6 main" for="">
                      Mountain
                    </label>
                  </div>
                </li>
                <li class="category-list">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </li>
              </form>
            </ul>
          </div>
          <!-- <div class="mt-1">
            <input type="button" value="submit" class="btn btn-primary" onclick="submitForms()">
          </div> -->
        </div>
      </aside>
      <div class="col-lg-9 col-md-9 col-sm-12">
        <!-- <div class="sort-by-content">
          <div class="sort-by-text d-inline-block">Sort By: </div>
          <button class="btn btn-toggle align-items-center rounded collapsed main d-inline-block card main py-3" data-bs-toggle="collapse" data-bs-target="#sortby" aria-expanded="true">
            Most Relevance
          </button>
          <div class="collapse show sort-by-toggle" id="sortby">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <form action="" class="form-group" name="lokasi"> 
                <li class="category-list">
                  <div class="form-check ">
                    <input class="form-check-input" name="lokasi" type="checkbox" value="Mataram" id="">
                    <label class="form-check-label fs-6 main" for="">
                      Mataram
                    </label>
                  </div>
                </li>
              </form>
            </ul>
          </div>
        </div> -->
        <div class="destination-content card p-3 mb-4">
          <div class="destination-image row">
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="image" style="background-image: url('<?=BASEURL;?>/assets/images/beach2.jpg');">
              <div class="star py-1 px-3">
                <img class="" src="<?=BASEURL;?>/assets/images/ic-stargreen.svg" alt="">
                <p class="d-inline-block third-color">5 Stars</p>
              </div>
              </div>
            </div>
            <div class="text col-lg-8 col-md-8 col-sm-6">
              <div class="category mb-2">
                <span class="py-1 px-3 rounded-pill">Pantai</span>
                <span class="py-1 px-3 rounded-pill">Lembah</span>
              </div>
              <div class="name fs-3 fw-semibold">
                Pantai anuk
              </div>
              <div class="description fs-6 mb-2">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero assumenda repudiandae perspiciatis itaque illum facere ut adipisci nulla esse a voluptatum, odio officia, velit reiciendis molestiae saepe amet dolor deleniti!
              </div>
              <a href="" class="btn btn-third py-2 px-3 fw-semibold">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
<script>
    submitForms = function() {
        document.forms["lokasi"].submit();
        document.forms["kategori"].submit();
        return true;
    }
</script>
