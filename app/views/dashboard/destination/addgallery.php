
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col">
        <div class="card p-3">
          <form action="<?= BASEURL;?>/addgallerydestination/tambah" enctype="multipart/form-data" method="POST">
            <div class="mb-3">
              <label for="id_destination" class="form-label">Destination</label>
              <select class="form-select" name="id_destination" id="id_destination">
                <option> Select Destination </option>
                <?php foreach( $data['destination'] as $destination) :?>
                  <option value="<?= $destination['id']?>" required><?= $destination['nama_id']?></option>
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
