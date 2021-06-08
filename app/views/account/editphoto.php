
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col">
        <div class="card p-3">
          <form action="<?= BASEURL;?>/account/changephoto" enctype="multipart/form-data" method="POST">
            <input 
              type="hidden" 
              class="form-control" 
              id="id" 
              name="id"
              value="<?=$data['user']['id'];?>">
            <div class="mb-3">
              <label for="foto" class="form-label">Photo</label>
              <input 
                type="file" 
                class="form-control"
                id="foto"
                name="foto" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-success">
              Change Profile Photo
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
