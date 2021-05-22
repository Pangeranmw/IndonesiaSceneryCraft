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
        <form action="" class="float-right" name="sortby"> 
          <span class="sort-by d-inline-block main fw-semibold">Sort By:</span>
          <span class="sort-by d-inline-block">
            <select class="styled-select card px-4 py-2 d-inline-block main" name="sortby" onchange="this.form.submit();">
              <option value="MostRelevance">Most Relevance</option>
              <option value="Recommendation">Recommended</option>
              <option value="LowestPrice">Lowest Price</option>
              <option value="HighestPrice">Highest Price</option>
            </select>
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
                <form action="" class="form-group" name="lokasi"> 
                  <!-- Looping -->
                  <li class="category-list">
                    <div class="form-check ">
                      <input class="form-check-input" name="lokasi" type="checkbox" value="Mataram" id="">
                      <label class="form-check-label fs-6 main" for="">
                        Mataram
                      </label>
                    </div>
                  </li>
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
          <div class="variety">
            <button class="btn btn-toggle align-items-center rounded collapsed main w-100" data-bs-toggle="collapse" data-bs-target="#variety">
              Variety
            </button>
            <div class="collapse" id="variety">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <form action="" class="" name="kategori"> 
                  <!-- Looping -->
                  <li class="category-list">
                    <div class="form-check ">
                      <input class="form-check-input" name="kategori" type="checkbox" value="beach" id="">
                      <label class="form-check-label fs-6 main" for="">
                        Beach
                      </label>
                    </div>
                  </li>
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
            <div class="card px-4 py-3 w-auto d-inline-block category-item " id="category-item">
              <p class="d-inline-block m-0 main">Bag</p>
              <button class="btn close" style="background-image: url('<?=BASEURL;?>/assets/images/closeicon.svg');"></button>
            </div>
            <div class="card px-4 py-3 w-auto d-inline-block category-item " id="category-item">
              <p class="d-inline-block m-0 main">Lombok, NTB</p>
              <button class="btn close" style="background-image: url('<?=BASEURL;?>/assets/images/closeicon.svg');"></button>
            </div>
            <!-- End Looping -->
          </form>
        </div>

        <div class="craft-section p-2">
          <div class="row">
            <!-- Looping -->
            <div class="craft-content p-1 col-lg-3 col-md-4 col-sm-6">
              <div class="card p-3">
                <a href="<?=BASEURL;?>/craft/detail" class="link-primary mt-1">
                  <span class="image">
                    <img class="rounded w-100" src="<?=BASEURL;?>/assets/images/ketak.jpeg" alt="">
                  </span>
                  <div class="star mt-1">
                    <img src="<?=BASEURL;?>/assets/images/ic-greystar.svg" alt="">
                  </div>
                  <div class="name fs-5 fw-semibold">
                    Tas Ketak
                  </div>
                  <div class="price main mt-1">
                    Rp. 200.000
                  </div>
                </a>
                <a href="<?=BASEURL;?>/cart" class="mt-1 btn btn-third py-2 px-2 fw-semibold w-50">Add to Cart</a>
              </div>
            </div>
            <!-- End Looping -->
          </div>
        </div>
      </div>
    </div>
  </div>
