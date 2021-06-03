
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col">
        <div class="card p-3">
          <form action="<?=BASEURL;?>/updatecategory/editcategory" method="POST">
            <input 
              type="hidden" 
              class="form-control" 
              id="id" 
              placeholder="Category (Indonesia)" 
              name="id"
              value="<?=$data['kategori']['id'];?>">
            <div class="mb-3">
              <label for="kategori_'.$_SESSION['lang'].'" class="form-label">Category (Indonesia)</label>
              <input 
              type="text" 
              class="form-control" 
              id="kategori_'.$_SESSION['lang'].'" 
              placeholder="Category (Indonesia)" 
              name="kategori_'.$_SESSION['lang'].'"
              value="<?=$data['kategori']['kategori_'.$_SESSION['lang'].''];?>">
            </div>
            <div class="mb-3">
              <label for="kategori_en" class="form-label">Category (English)</label>
              <input 
                type="text" 
                class="form-control" 
                id="kategori_en" 
                placeholder="Category (English)" 
                name="kategori_en" 
                value="<?=$data['kategori']['kategori_en'];?>">
            </div>
            <button type="submit" class="btn btn-success">
              Update Category
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
