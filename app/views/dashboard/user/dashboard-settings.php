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
                <h2 class="dashboard-title">Store Settings</h2>
                <p class="dashboard-subtitle">
                  Make store that profitable
                </p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12">
                    <form action="">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="storeName">Store Name</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="storeName"
                                  aria-describedby="emailHelp"
                                  name="storeName"
                                  value="Papel La Casa"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="category">Category</label>
                                <select
                                  name="category"
                                  id="category"
                                  class="form-control"
                                >
                                  <option value="Furniture">Furniture</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="is_store_open">Store Status</label>
                                <p class="text-muted">
                                  Apakah saat ini toko Anda buka?
                                </p>
                                <div
                                  class="custom-control custom-radio custom-control-inline"
                                >
                                  <input
                                    class="custom-control-input"
                                    type="radio"
                                    name="is_store_open"
                                    id="openStoreTrue"
                                    value="true"
                                    checked
                                  />
                                  <label
                                    class="custom-control-label"
                                    for="openStoreTrue"
                                    >Buka</label
                                  >
                                </div>
                                <div
                                  class="custom-control custom-radio custom-control-inline"
                                >
                                  <input
                                    class="custom-control-input"
                                    type="radio"
                                    name="is_store_open"
                                    id="openStoreFalse"
                                    value="false"
                                  />
                                  <label
                                    makasih
                                    class="custom-control-label"
                                    for="openStoreFalse"
                                    >Tutup Sementara</label
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col text-right">
                              <button
                                type="submit"
                                class="btn btn-success px-5"
                              >
                                Save Now
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
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
