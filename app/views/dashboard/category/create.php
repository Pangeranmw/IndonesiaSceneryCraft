
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col">
        <div class="card p-3">
          <form action="<?=BASEURL;?>/addcategory/tambah" method="post">
            <div class="mb-3">
              <label for="kategori_'.$_SESSION['lang'].'" class="form-label">Category (Indonesia)</label>
              <input type="text" class="form-control" id="kategori_'.$_SESSION['lang'].'" placeholder="Category (Indonesia)" name="kategori_'.$_SESSION['lang'].'">
            </div>
            <div class="mb-3">
              <label for="kategori_en" class="form-label">Category (English)</label>
              <input type="text" class="form-control" id="kategori_en" placeholder="Category (English)" name="kategori_en">
            </div>
            <button type="submit" class="btn btn-success">
              Add Category
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
