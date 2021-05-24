
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col">
        <div class="card p-3">
          <form action="" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="destination" class="form-label">Destination</label>
              <select class="form-select" name="name" id="name">
                <option value=""> Select Destination </option>
                <option value="Rinjani"> Rinjani </option>
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
