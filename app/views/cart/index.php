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
                <?php foreach($data['cart'] as $cart) :?>
                  <!-- Looping -->
                  <tr class="cart-item">
                    <td style="width: 25%;">
                      <img src="<?= BASEURL;?>/assets/images/<?= $cart['gallery'] ?>" alt="" class="cart-image"/>
                    </td>
                    <td style="width: 30%;">
                      <div class="product-title"><?= $cart['nama_'.$_SESSION['lang'].''] ?></div>
                      <div class="product-subtitle"><?= ucwords(strtolower($cart['nama_provinsi'])) ?></div>
                    </td>
                    <td style="width: 15%;">
                      <div class="product-title">Rp <?= str_replace(',','.',number_format($cart['harga'])) ?></div>
                      <div class="product-subtitle">Rupiah</div>
                    </td>
                    <td style="width: 15%;">
                      <div class="product-title">
                        <div class="detail-quantity input-group">
                          <button type="button" class="minus quantity-left-minus btn btn-white btn-number rounded-left"  data-type="minus" onclick="this.parentNode.querySelector('[type=number]').stepDown();" id="decrease">
                            <i class="bi bi-dash-circle"></i>
                          </button>
                          <input type="number" id="quantity" name="quantity" class="form-control input-number border-0 rounded-0 quantity" value="<?=$cart['jumlah']?>" min="1" max="<?= $cart['stok'] ?>">
                          <button type="button" class="plus quantity-right-plus btn btn-white btn-number rounded-right" data-type="plus" onclick="this.parentNode.querySelector('[type=number]').stepUp();" id="increment"> 
                              <i class="bi bi-plus-circle"></i>
                          </button>
                        </div>
                      </div>
                    </td>
                    <td style="width: 20%;">
                      <a href="<?= BASEURL?>/cart/remove/<?= $cart['id_keranjang']?>" class="btn btn-remove-cart">
                        Remove
                      </a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
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
              <div class="form-group mb-3">
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
              <div class="form-group mb-3">
                <label for="provinsi">Province</label>
                <select class="form-control form-select w-100" name="provinsi" id="provinsi"required>
                  <option>Select Province</option>
                  <?php foreach( $data['wilayah'] as $daerah) :?>
                    <option value="<?= $daerah['id']?>" required><?= $daerah['nama_provinsi']?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mb-3">
                <label for="kabupaten">City</label>
                <select class="form-control form-select w-100" name="kabupaten" id="kabupaten" required>
                  <option></option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mb-3">
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
              <div class="form-group mb-3">
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
              <div class="product-title text-success total">Rp 
              <?php
                $total=0;
                foreach($data['cart'] as $cart){
                  $total+=$cart['jumlah']*$cart['harga'];
                }
                echo str_replace(',','.',number_format($total));
              ?>
              </div>
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
  $(".minus , .plus , .quantity").on("click input", function() {
    var selectors = $(this).closest('tr'); //get closest tr
    var quan = selectors.find('.quantity').val(); //get qty
    if (!quan || quan < 0)
      return;
    var cost = parseFloat(selectors.find('.cost').text());
    var total = (cost * quan).toFixed(2);
    selectors.find('.total').text(total); //add total 
  })


  $(document).ready(function () {
	$("#provinsi").change(function () {
		var url = "<?=BASEURL;?>/adddestination/add_ajax_kab/" + $(this).val();
		$("#kabupaten").load(url);
		return false;
	});

	$("#kabupaten").change(function () {
		var url = "<?=BASEURL;?>/adddestination/add_ajax_kec/" + $(this).val();
		$("#kecamatan").load(url);
		return false;
	});

	$("#kecamatan").change(function () {
		var url = "<?=BASEURL;?>/adddestination/add_ajax_des/" + $(this).val();
		$("#desa").load(url);
		return false;
	});
});
</script>
<!-- <script>
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
</script> -->
