
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
          <div class="card mb-4">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                  <h6 class="mb-0">Category List</h6>
                </div>
                <div class="col-md-6 text-right">
                  <a class="btn bg-gradient-dark mb-0" href="<?=BASEURL;?>/dashboard/addcategory"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add Category</a>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-sm font-weight-bolder opacity-7">CategoryID</th>
                      <th class="text-center text-sm font-weight-bolder opacity-7">CategoryEN</th>
                      <th class="text-center text-sm font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="align-middle text-center">
                        <span class="text-sm font-weight-bolder mb-0">Gunung</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-sm font-weight-bolder mb-0">Mountain</span>
                      </td>
                      <td class="align-middle text-center">
                        <a class="btn btn-link text-danger text-gradient mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                        <a class="btn btn-link text-dark mb-0" href="<?=BASEURL;?>/dashboard/updatecategory"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
