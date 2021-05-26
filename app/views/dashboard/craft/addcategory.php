
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col">
        <div class="card p-3">
          <form action="<?=BASEURL;?>/addcategorycraft/tambah" method="POST">
            <div class="mb-3">
              <label for="craft" class="form-label">Craft</label>
              <select class="form-select" name="id_kerajinan" id="craft">
                <option> Select Craft </option>
                <?php foreach($data['kerajinan'] as $kerajinan):?>
                  <option value="<?=$kerajinan['id'];?>"> <?=$kerajinan['nama_id'];?> </option>
                <?php endforeach;?>
              </select>
            </div>
            <div class="mb-3">
              <label for="kategori" class="form-label">Category</label>
              <select class="form-select" name="id_kategori" id="kategori">
                <option> Select Category </option>
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
