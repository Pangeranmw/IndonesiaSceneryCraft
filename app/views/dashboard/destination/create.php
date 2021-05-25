
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col">
        <div class="card p-3">
          <form method="post" action="<?=BASEURL;?>/adddestination/tambah">
            <div class="mb-3">
              <label for="nama_id" class="form-label">Name (Indonesia)</label>
              <input 
                type="text" 
                class="form-control" 
                id="nama_id" 
                placeholder="Name (Indonesia)" 
                name="nama_id" required>
            </div>
            <div class="mb-3">
              <label for="nama_en" class="form-label">Name (English)</label>
              <input 
              type="text" 
              class="form-control" 
              id="nama_en" 
              placeholder="Name (English)" 
              name="nama_en" required>
            </div>
            <div class="mb-3">
              <label for="artikel_id" class="form-label">Article (Indonesia)</label>
              <textarea class="form-control"
              placeholder="Article (Indonesia)" 
              name="artikel_id" id="default2"></textarea>
            </div>
            <div class="mb-3">
              <label for="artikel_en" class="form-label">Article (English)</label>
              <textarea class="form-control"
              placeholder="Article (English)" 
              name="artikel_en" id="default"></textarea>
            </div>
            <div class="mb-3">
              <label for="maps" class="form-label">Maps</label>
              <input 
              type="text" 
              class="form-control" 
              id="maps" 
              placeholder="Maps" 
              name="maps" required>
            </div>
            <div class="mb-3">
              <label for="provinsi" class="form-label">Province</label>
              <select class="form-select w-100" name="provinsi" id="provinsi"required>
                <option>Select Province</option>
                <?php foreach( $data['wilayah'] as $daerah) :?>
                  <option value="<?= $daerah['id']?>" required><?= $daerah['nama_provinsi']?></option>
                <?php endforeach;?>
              </select>
            </div>
            <div class="mb-3">
              <label for="kabupaten" class="form-label">Regency</label>
              <select class="form-select w-100" name="kabupaten" id="kabupaten" required>
                <option></option>
              </select>
            </div>
            <div class="mb-3">
              <label for="kecamatan" class="form-label">District</label>
              <select class="form-select w-100" name="kecamatan" id="kecamatan" required>
                <option></option>
              </select>
            </div>
            <div class="mb-3">
              <label for="desa" class="form-label">Village</label>
              <select class="form-select w-100" name="id_lokasi" id="desa" required>
                <option></option>
              </select>
            </div>
            <button type="submit" class="btn btn-success">
              Add Destination
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
		var url = "<?=BASEURL;?>/adddestination/add_ajax_kab/" + $(this).val();
		$("#kabupaten").load(url);
		return false;
	});

	$("#kabupaten").change(function () {
		var url = "<?=BASEURL;?>/adddestination/add_ajax_kec/" + $(this).val();
		$("#kecamatan").load(url);
		return false;
	});

	$("#kecamatan").change(function () {
		var url = "<?=BASEURL;?>/adddestination/add_ajax_des/" + $(this).val();
		$("#desa").load(url);
		return false;
	});
});
</script>
