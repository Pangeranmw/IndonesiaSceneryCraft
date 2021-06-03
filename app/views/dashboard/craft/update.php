  <div class="container-fluid py-4">
    <div class="row">
      <div class="col">
        <div class="card p-3">
          <form action="<?= BASEURL;?>/updatecraft/editcraft" method="post">
            <input 
              type="hidden" 
              class="form-control" 
              id="id" 
              name="id"
              value="<?=$data['kerajinan']['id'];?>"
              required>
            <div class="mb-3">
              <label for="nama_'.$_SESSION['lang'].'" class="form-label">Name (Indonesia)</label>
              <input 
                type="text" 
                class="form-control" 
                id="nama_'.$_SESSION['lang'].'" 
                placeholder="Craft Name (Indonesia)" 
                name="nama_'.$_SESSION['lang'].'"
                value="<?=$data['kerajinan']['nama_'.$_SESSION['lang'].''];?>"
                required>
            </div>
            <div class="mb-3">
              <label for="nama_en" class="form-label">Name (English)</label>
              <input 
              type="text" 
              class="form-control" 
              id="nama_en" 
              placeholder="Craft Name (English)" 
              value="<?=$data['kerajinan']['nama_en'];?>"
              name="nama_en" required>
            </div>
            <div class="mb-3">
              <label for="harga" class="form-label">Price</label>
              <input 
              type="number" 
              class="form-control" 
              id="harga" 
              placeholder="Harga" 
              value="<?=$data['kerajinan']['harga'];?>"
              name="harga" required>
            </div>
            <div class="mb-3">
              <label for="stok" class="form-label">Stock</label>
              <input 
              type="number" 
              class="form-control" 
              id="stok" 
              placeholder="Stok" 
              value="<?=$data['kerajinan']['stok'];?>"
              name="stok" required>
            </div>
            <div class="mb-3">
              <label for="deskripsi_'.$_SESSION['lang'].'" class="form-label">Description (Indonesia)</label>
              <textarea class="form-control"
              placeholder="Description (Indonesia)" 
              name="deskripsi_'.$_SESSION['lang'].'" id="editor"><?=$data['kerajinan']['deskripsi_'.$_SESSION['lang'].''];?></textarea>
            </div>
            <div class="mb-3">
              <label for="deskripsi_en" class="form-label">Description (English)</label>
              <textarea class="form-control"
              placeholder="Description (English)"
              name="deskripsi_en"><?=$data['kerajinan']['deskripsi_en'];?></textarea>
            </div>
            <div class="mb-3">
              <label for="provinsi" class="form-label">Province</label>
              <select class="form-select w-100" name="provinsi" id="provinsi" required>
                <option value="<?=$data['kerajinan']['id_provinsi'];?>"><?=$data['kerajinan']['nama_provinsi'];?></option>
                <?php foreach( $data['wilayah'] as $provinsi) :?>
                  <option value="<?= $provinsi['id']?>" required><?= $provinsi['nama_provinsi']?></option>
                <?php endforeach;?>
              </select>
            </div>
            <div class="mb-3">
              <label for="kabupaten" class="form-label">Regency</label>
              <select class="form-select w-100" name="kabupaten" id="kabupaten" required>
                <option value="<?=$data['kerajinan']['id_kabupaten'];?>"><?=$data['kerajinan']['nama_kabupaten'];?></option>
              </select>
            </div>
            <div class="mb-3">
              <label for="kecamatan" class="form-label">District</label>
              <select class="form-select w-100" name="kecamatan" id="kecamatan" required>
                <option value="<?=$data['kerajinan']['id_kecamatan'];?>"><?=$data['kerajinan']['nama_kecamatan'];?></option>
              </select>
            </div>
            <div class="mb-3">
              <label for="desa" class="form-label">Village</label>
              <select class="form-select w-100" name="id_lokasi" id="desa" required>
                <option value="<?=$data['kerajinan']['id_desa'];?>"><?=$data['kerajinan']['nama_desa'];?></option>
              </select>
            </div>
            <button type="submit" class="btn btn-success">
              Update Craft
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
		var url = "<?=BASEURL;?>/updatecraft/add_ajax_kab/" + $(this).val();
		$("#kabupaten").load(url);
		return false;
	});

	$("#kabupaten").change(function () {
		var url = "<?=BASEURL;?>/updatecraft/add_ajax_kec/" + $(this).val();
		$("#kecamatan").load(url);
		return false;
	});

	$("#kecamatan").change(function () {
		var url = "<?=BASEURL;?>/updatecraft/add_ajax_des/" + $(this).val();
		$("#desa").load(url);
		return false;
	});
});
</script>
