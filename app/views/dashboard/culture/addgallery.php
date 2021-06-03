
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col">
        <div class="card p-3">
          <form action="<?= BASEURL;?>/addgalleryculture/tambah" enctype="multipart/form-data" method="POST">
            <div class="mb-3">
              <label for="id_budaya" class="form-label">Culture</label>
              <select class="form-select" name="id_budaya" id="id_budaya">
                <option> Select Culture </option>
                <?php foreach( $data['culture'] as $culture) :?>
                  <option value="<?= $culture['id']?>" required><?= $culture['nama_'.$_SESSION['lang'].'']?></option>
                <?php endforeach;?>
              </select>
            </div>
            <div class="mb-3">
              <label for="foto" class="form-label">Photo</label>
              <input 
                type="file" 
                class="form-control" 
                id="foto" 
                name="foto" required multiple>
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
