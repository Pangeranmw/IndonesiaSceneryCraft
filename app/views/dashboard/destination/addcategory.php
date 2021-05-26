
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col">
        <div class="card p-3">
          <form action="<?=BASEURL;?>/addcategorydestination/tambah" method="POST">
            <div class="mb-3">
              <label for="destination" class="form-label">Destination</label>
              <select class="form-select" name="id_destinasi" id="destination">
                <option> Select Destination </option>
                <?php foreach($data['destinasi'] as $destinasi):?>
                  <option value="<?=$destinasi['id'];?>"> <?=$destinasi['nama_id'];?> </option>
                <?php endforeach;?>
              </select>
            </div>
            <div class="mb-3">
              <label for="kategori_id" class="form-label">Category</label>
              <select class="form-select" name="id_kategori" id="kategori_id">
                <option value=""> Select Destination </option>
                <?php foreach($data['kategori'] as $kategori):?>
                  <option value="<?=$kategori['id'];?>"> <?=$kategori['kategori_id'];?> </option>
                <?php endforeach;?>
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
