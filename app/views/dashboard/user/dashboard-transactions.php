<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
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
        <div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">
            <div class="dashboard-heading">
              <h2 class="dashboard-title">Transactions</h2>
              <p class="dashboard-subtitle">
                Big result start from the small one
              </p>
            </div>
            <div class="dashboard-content">
              <ul class="nav nav-pills" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="sell-tab" data-toggle="tab" href="#sell" role="tab"
                    aria-controls="sell" aria-selected="true">Sell Product</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="buy-tab" data-toggle="tab" href="#buy" role="tab" aria-controls="buy"
                    aria-selected="false">Buy Product</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="sell" role="tabpanel" aria-labelledby="sell-tab">
                  <div class="row mt-3">
                    <div class="col-12 mt-2">
                      <a class="card card-list d-block" href="dashboard-transactions-details.html">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-1">
                              <img src="images/dashboard-icon-product-1.png" alt="" />
                            </div>
                            <div class="col-md-4">
                              Shirup Marzzan
                            </div>
                            <div class="col-md-3">
                              Angga Risky
                            </div>
                            <div class="col-md-3">
                              12 Januari, 2020
                            </div>
                            <div class="col-md-1 d-none d-md-block">
                              <img src="images/dashboard-arrow-right.svg" alt="" />
                            </div>
                          </div>
                        </div>
                      </a>
                      <a class="card card-list d-block" href="dashboard-transactions-details.html">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-1">
                              <img src="images/dashboard-icon-product-2.png" alt="" />
                            </div>
                            <div class="col-md-4">
                              LeBrone X
                            </div>
                            <div class="col-md-3">
                              Masayoshi
                            </div>
                            <div class="col-md-3">
                              11 January, 2020
                            </div>
                            <div class="col-md-1 d-none d-md-block">
                              <img src="images/dashboard-arrow-right.svg" alt="" />
                            </div>
                          </div>
                        </div>
                      </a>
                      <a class="card card-list d-block" href="dashboard-transactions-details.html">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-1">
                              <img src="images/dashboard-icon-product-3.png" alt="" />
                            </div>
                            <div class="col-md-4">
                              Soffa Lembutte
                            </div>
                            <div class="col-md-3">
                              Shayna
                            </div>
                            <div class="col-md-3">
                              11 January, 2020
                            </div>
                            <div class="col-md-1 d-none d-md-block">
                              <img src="images/dashboard-arrow-right.svg" alt="" />
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="buy" role="tabpanel" aria-labelledby="buy-tab">
                  <div class="row mt-3">
                    <div class="col-12 mt-2">
                      <a class="card card-list d-block" href="dashboard-transactions-details.html">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-1">
                              <img src="images/dashboard-icon-product-1.png" alt="" />
                            </div>
                            <div class="col-md-4">
                              Shirup Marzzan
                            </div>
                            <div class="col-md-3">
                              Angga Risky
                            </div>
                            <div class="col-md-3">
                              12 Januari, 2020
                            </div>
                            <div class="col-md-1 d-none d-md-block">
                              <img src="images/dashboard-arrow-right.svg" alt="" />
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
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
