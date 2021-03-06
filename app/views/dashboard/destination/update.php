  <div class="container-fluid py-4">
    <div class="row">
      <div class="col">
        <div class="card p-3">
          <form action="<?= BASEURL;?>/updatedestination/editdestination" method="POST">
            <input type="hidden" name="id" id="id" value="<?=$data['destinasi']['id'];?>">
            <input
                type="hidden" 
                class="form-control"
                id="id" 
                name="id"
                value="<?=$data['destinasi']['id'];?>"
                required>
            <div class="mb-3">
              <label for="nama_id" class="form-label">Name (Indonesia)</label>
              <input
                type="text" 
                class="form-control"
                id="nama_id" 
                placeholder="Destination Name (Indonesia)"
                name="nama_id"
                value="<?=$data['destinasi']['nama_id'];?>"
                required>
            </div>
            <div class="mb-3">
              <label for="nama_en" class="form-label">Name (English)</label>
              <input 
              type="text"
              class="form-control"
              id="nama_en"
              placeholder="Destination Name (English)"
              value="<?=$data['destinasi']['nama_en'];?>"
              name="nama_en" required>
            </div>
            <div class="mb-3">
              <label for="artikel_id" class="form-label">Article (Indonesia)</label>
              <textarea class="form-control"
              placeholder="Article (Indonesia)"
              name="artikel_id" id="editor"
              value="<?=$data['destinasi']['artikel_id'];?>"><?=$data['destinasi']['artikel_id'];?></textarea>
            </div>
            <div class="mb-3">
              <label for="artikel_en" class="form-label">Article (English)</label>
              <textarea class="form-control"
              placeholder="Article (English)"
              value="<?=$data['destinasi']['artikel_en'];?>"
              name="artikel_en" id="editor2"><?=$data['destinasi']['artikel_en'];?></textarea>
            </div>
            <div class="mb-3">
              <label for="maps" class="form-label">Maps</label>
              <input 
              type="text" 
              class="form-control" 
              id="maps" 
              placeholder="Maps" 
              value="<?=$data['destinasi']['maps'];?>"
              name="maps" required>
            </div>
            <div class="mb-3">
              <label for="provinsi" class="form-label">Province</label>
              <select class="form-select w-100" name="provinsi" id="provinsi"required>
                <option value="<?=$data['destinasi']['nama_provinsi'];?>"><?=$data['destinasi']['nama_provinsi'];?></option>
                <?php foreach( $data['wilayah'] as $provinsi) :?>
                  <option value="<?= $provinsi['id']?>" required><?= $provinsi['nama_provinsi']?></option>
                <?php endforeach;?>
              </select>
            </div>
            <div class="mb-3">
              <label for="kabupaten" class="form-label">Regency</label>
              <select class="form-select w-100" name="kabupaten" id="kabupaten" required>
                <option value="<?=$data['destinasi']['nama_kabupaten'];?>"><?=$data['destinasi']['nama_kabupaten'];?></option>
              </select>
            </div>
            <div class="mb-3">
              <label for="kecamatan" class="form-label">District</label>
              <select class="form-select w-100" name="kecamatan" id="kecamatan" required>
                <option value="<?=$data['destinasi']['nama_kecamatan'];?>"><?=$data['destinasi']['nama_kecamatan'];?></option>
              </select>
            </div>
            <div class="mb-3">
              <label for="id_lokasi" class="form-label">Village</label>
              <select class="form-select w-100" name="id_lokasi" id="desa" required>
                <option value="<?=$data['destinasi']['id_desa'];?>"><?=$data['destinasi']['nama_desa'];?></option>
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
