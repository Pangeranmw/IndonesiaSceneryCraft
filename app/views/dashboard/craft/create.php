
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col">
        <div class="card p-3">
          <form action="<?=BASEURL;?>/addcraft/tambah" method="POST">
            <div class="mb-3">
              <label for="nama_id" class="form-label">Name (Indonesia)</label>
              <input 
                type="text" 
                class="form-control" 
                id="nama_id" 
                placeholder="Craft Name (Indonesia)" 
                name="nama_id" required>
            </div>
            <div class="mb-3">
              <label for="nama_en" class="form-label">Name (English)</label>
              <input 
              type="text" 
              class="form-control" 
              id="nama_en" 
              placeholder="Craft Name (English)" 
              name="nama_en" required>
            </div>
            <div class="mb-3">
              <label for="deskripsi_id" class="form-label">Description (Indonesia)</label>
              <textarea class="form-control"
              placeholder="Description (Indonesia)" 
              name="deskripsi_id"></textarea>
            </div>
            <div class="mb-3">
              <label for="deskripsi_en" class="form-label">Description (English)</label>
              <textarea class="form-control"
              placeholder="Description (English)" 
              name="deskripsi_en"></textarea>
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
              <label for="provinsi" class="form-label">Province</label>
              <select class="form-select w-100" name="provinsi" id="provinsi" required>
                <?php foreach( $data['wilayah'] as $provinsi) :?>
                  <option value="<?= $provinsi['id']?>" required><?= $provinsi['nama_provinsi']?></option>
                <?php endforeach;?>
              </select>
            </div>
            <div class="mb-3">
              <label for="kabupaten" class="form-label">Regency</label>
              <select class="form-select w-100" name="kabupaten" id="kabupaten" required>
                <option>Select Regency</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="kecamatan" class="form-label">District</label>
              <select class="form-select w-100" name="kecamatan" id="kecamatan" required>
                <option>Select District</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="desa" class="form-label">Village</label>
              <select class="form-select w-100" name="id_lokasi" id="desa" required>
                <option>Select Village</option>
              </select>
            </div>
            <button type="submit" class="btn btn-success">
              Add Craft
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
<script>
$(document).ready(function () {
	$("#provinsi").change(function () {
		var url = "<?=BASEURL;?>/addcraft/add_ajax_kab/" + $(this).val();
		$("#kabupaten").load(url);
		return false;
	});

	$("#kabupaten").change(function () {
		var url = "<?=BASEURL;?>/addcraft/add_ajax_kec/" + $(this).val();
		$("#kecamatan").load(url);
		return false;
	});

	$("#kecamatan").change(function () {
		var url = "<?=BASEURL;?>/addcraft/add_ajax_des/" + $(this).val();
		$("#desa").load(url);
		return false;
	});
});
</script>
