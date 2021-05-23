
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col">
        <div class="card p-3">
          <form action="">
            <div class="mb-3">
              <label for="kategori_id" class="form-label">Category (Indonesia)</label>
              <input 
              type="text" 
              class="form-control" 
              id="kategori_id" 
              placeholder="Category (Indonesia)" 
              name="kategori_id"
              value="<?=$data['kategori_id'];?>">
            </div>
            <div class="mb-3">
              <label for="kategori_en" class="form-label">Category (English)</label>
              <input 
                type="text" 
                class="form-control" 
                id="kategori_en" 
                placeholder="Category (English)" 
                name="kategori_en" 
                value="<?=$data['kategori_en'];?>">
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
