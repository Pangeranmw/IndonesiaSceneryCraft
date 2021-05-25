<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Dashboard - Your Best Marketplace</title>
    <?php include 'layout/link.php'?>
  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <?php include 'include/sidebar.php'?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <?php include 'include/nav.php'?>
          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">My Products</h2>
                <p class="dashboard-subtitle">
                  Manage it well and get money
                </p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12">
                    <a
                      href="dashboard-products-create.html"
                      class="btn btn-success"
                      >Add New Product</a
                    >
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a
                      class="card card-dashboard-product d-block"
                      href="dashboard-products-details.html"
                    >
                      <div class="card-body">
                        <img
                          src="images/product-card-1.png"
                          alt=""
                          class="w-100 mb-2"
                        />
                        <div class="product-title">Shirup Marzzan</div>
                        <div class="product-category">Foods</div>
                      </div>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a
                      class="card card-dashboard-product d-block"
                      href="dashboard-products-details.html"
                    >
                      <div class="card-body">
                        <img
                          src="images/product-card-2.png"
                          alt=""
                          class="w-100 mb-2"
                        />
                        <div class="product-title">Shirup Marzzan</div>
                        <div class="product-category">Foods</div>
                      </div>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a
                      class="card card-dashboard-product d-block"
                      href="dashboard-products-details.html"
                    >
                      <div class="card-body">
                        <img
                          src="images/product-card-3.png"
                          alt=""
                          class="w-100 mb-2"
                        />
                        <div class="product-title">Shirup Marzzan</div>
                        <div class="product-category">Foods</div>
                      </div>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a
                      class="card card-dashboard-product d-block"
                      href="dashboard-products-details.html"
                    >
                      <div class="card-body">
                        <img
                          src="images/product-card-4.png"
                          alt=""
                          class="w-100 mb-2"
                        />
                        <div class="product-title">Shirup Marzzan</div>
                        <div class="product-category">Foods</div>
                      </div>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a
                      class="card card-dashboard-product d-block"
                      href="dashboard-products-details.html"
                    >
                      <div class="card-body">
                        <img
                          src="images/product-card-5.png"
                          alt=""
                          class="w-100 mb-2"
                        />
                        <div class="product-title">Shirup Marzzan</div>
                        <div class="product-category">Foods</div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /#page-content-wrapper -->
      </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- Menu Toggle Script -->
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
  </body>
</html>
