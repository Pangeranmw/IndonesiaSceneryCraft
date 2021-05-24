
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col">
        <div class="card p-3">
          <form action="">
            <div class="mb-3">
              <label for="nama_id" class="form-label">Name (Indonesia)</label>
              <input 
                type="text" 
                class="form-control" 
                id="nama_id" 
                placeholder="Category (Indonesia)" 
                name="nama_id" required>
            </div>
            <div class="mb-3">
              <label for="nama_en" class="form-label">Name (English)</label>
              <input 
              type="text" 
              class="form-control" 
              id="nama_en" 
              placeholder="Category (English)" 
              name="nama_en" required>
            </div>
            <div class="mb-3">
              <label for="deskripsi_id" class="form-label">Description (Indonesia)</label>
              <textarea class="form-control ck_editor_txt"
              placeholder="Description (Indonesia)" 
              name="deskripsi_id" id="editor" required>
                
              </textarea>
            </div>
            <div class="mb-3">
              <label for="deskripsi_en" class="form-label">Description (English)</label>
              <textarea class="form-control ck_editor_txt"
              placeholder="Description (English)" 
              name="deskripsi_en" id="editor2" required>
                
              </textarea>
            </div>
            <div class="mb-3">
              <label for="stok" class="form-label">Stock</label>
              <input 
              type="number" 
              class="form-control" 
              id="stok" 
              placeholder="Stock" 
              name="stok" min="1" max="999" required>
            </div>
            <div class="mb-3">
              <label for="harga" class="form-label">Price</label>
              <input 
              type="number" 
              class="form-control" 
              id="harga" 
              placeholder="Price" 
              name="harga" min="1" required>
            </div>
            <div class="mb-3">
              <label for="nama_provinsi" class="form-label">Province</label>
              <select class="form-select w-100" name="nama_provinsi" id="nama_provinsi"required>
                <option value="">Select Province</option>
                <option value="NTB" required>NTB</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="nama_kabupaten" class="form-label">Regency</label>
              <select class="form-select w-100" name="nama_kabupaten" id="nama_kabupaten" required>
                <option value="">Select Regency</option>
                <option value="Lombok" required>Lombok</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="nama_kecamatan" class="form-label">District</label>
              <select class="form-select w-100" name="nama_kecamatan" id="nama_kecamatan" required>
                <option value="">Select District</option>
                <option value="Lombok Utara" required>Lombok Utara</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="nama_desa" class="form-label">Village</label>
              <select class="form-select w-100" name="nama_desa" id="nama_desa" required>
                <option value="">Select Village</option>
                <option value="Sembalun" required>Sembalun</option>
              </select>
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
<script>
  var allEditors = document.querySelectorAll('.ck_editor_txt');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(allEditors[i]);
  }
</script>
