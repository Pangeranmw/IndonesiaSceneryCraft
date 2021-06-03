
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
                  <option value="<?=$destinasi['id'];?>"> <?=$destinasi['nama_'.$_SESSION['lang'].''];?> </option>
                <?php endforeach;?>
              </select>
            </div>
            <div class="mb-3">
              <label for="kategori_'.$_SESSION['lang'].'" class="form-label">Category</label>
              <select class="form-select" name="id_kategori" id="kategori_'.$_SESSION['lang'].'">
                <option value=""> Select Destination </option>
                <?php foreach($data['kategori'] as $kategori):?>
                  <option value="<?=$kategori['id'];?>"> <?=$kategori['kategori_'.$_SESSION['lang'].''];?> </option>
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
