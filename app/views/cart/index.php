<body style="background-color: var(--bg);">
    <!-- Page Content -->
    <div class="page-content page-cart mt-5">
      <section class="store-cart">
        <div class="container px-5">
          <div class="row">
            <div class="col-12 table-responsive">
              <table class="table table-borderless table-cart" aria-describedby="Cart">
                <thead>
                  <tr>
                    <th scope="col">Photo</th>
                    <th scope="col">Name &amp; Location</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Menu</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Looping -->
                  <tr class="cart-item">
                    <td style="width: 25%;">
                      <img src="<?= BASEURL;?>/assets/images/ketak.jpeg" alt="" class="cart-image"/>
                    </td>
                    <td style="width: 30%;">
                      <div class="product-title">Tas Ketas</div>
                      <div class="product-subtitle">NTB</div>
                    </td>
                    <td style="width: 15%;">
                      <div class="product-title">Rp 200.000</div>
                      <div class="product-subtitle">Rupiah</div>
                    </td>
                    <td style="width: 15%;">
                      <div class="product-title">
                        <div class="detail-quantity input-group">
                          <span class="input-group-btn">
                            <button type="button" class="quantity-left-minus btn btn-white btn-number rounded-left"  data-type="minus" data-field="">
                              <i class="bi bi-dash-circle"></i>
                            </button>
                          </span>
                          <input type="text" id="quantity" name="quantity" class="form-control input-number border-0 rounded-0" value="1" min="1" max="100">
                          <span class="input-group-btn">
                            <button type="button" class="quantity-right-plus btn btn-white btn-number rounded-right" data-type="plus" data-field="">
                                <i class="bi bi-plus-circle"></i>
                            </button>
                          </span>
                        </div>
                      </div>
                    </td>
                    <td style="width: 20%;">
                      <a href="#" class="btn btn-remove-cart">
                        Remove
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="shipping-detail row">
            <hr/>
            <div class="col-12">
              <h2 class="mb-4">Shipping Details</h2>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-md-12">
              <div class="form-group">
                <label for="alamat">Address</label>
                <input
                  type="text"
                  class="form-control"
                  id="alamat"
                  aria-describedby="emailHelp"
                  name="alamat"
                  placeholder="Address"
                />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="provinsi">Province</label>
                <select name="provinsi" id="provinsi" class="form-control form-select">
                  <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="kabupaten">City</label>
                <select name="kabupaten" id="kabupaten" class="form-control form-select">
                  <option value="Mataram">Mataram</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="postalCode">Postal Code</label>
                <input
                  type="text"
                  class="form-control"
                  id="postalCode"
                  name="postalCode"
                  placeholder="83113"
                />
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="mobile">Mobile</label>
                <input
                  type="text"
                  class="form-control"
                  id="mobile"
                  name="mobile"
                  placeholder="+6283129978695"
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <hr />
            </div>
            <div class="col-12">
              <h2>Payment Informations</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-4 col-md-2">
              <div class="product-title text-success">Rp 200.000</div>
              <div class="product-subtitle">Total</div>
            </div>
            <div class="col-8 col-md-3">
              <a
                href="success.html"
                class="btn btn-success mt-4 px-4 btn-block"
              >
                Checkout Now
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>
<script src="<?= BASEURL;?>/assets/vendor/jquery.min.js"></script>
<script>
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
      if(quantity>1){
      $('#quantity').val(quantity - 1);
      }
    });
  });
</script>
