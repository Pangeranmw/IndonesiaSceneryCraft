
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col">
        <div class="card p-3">
          <form action="<?= BASEURL;?>/addgallerycraft/tambah" enctype="multipart/form-data" method="POST">
            <div class="mb-3">
              <label for="id_kerajinan" class="form-label">Craft</label>
              <select class="form-select" name="id_kerajinan" id="id_kerajinan">
                <option> Select Craft </option>
                <?php foreach( $data['craft'] as $craft) :?>
                  <option value="<?=$craft['id']?>" required><?=$craft['nama_id']?></option>
                <?php endforeach;?>
              </select>
            </div>
            <div class="mb-3">
              <label for="foto" class="form-label">Photo</label>
              <input 
                type="file" 
                class="form-control" 
                id="foto" 
                name="foto" required>
            </div>
            <button type="submit" class="btn btn-success">
              Add Gallery
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
