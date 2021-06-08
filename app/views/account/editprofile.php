  <div class="container-fluid py-4">
    <div class="row">
      <div class="col">
        <div class="card p-3">
          <form action="<?= BASEURL;?>/account/changeprofile" method="POST">
            <input
                type="hidden" 
                class="form-control"
                id="id" 
                name="id"
                value="<?=$data['user']['id'];?>"
                required>
            <div class="mb-3">
              <label for="nama_id" class="form-label">Full Name</label>
              <input
                type="text" 
                class="form-control"
                id="nama_lengkap" 
                placeholder="Full Name"
                name="nama_lengkap"
                value="<?=$data['user']['nama_lengkap'];?>"
                required>
            </div>
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input 
              type="text"
              class="form-control"
              id="username"
              placeholder="Username"
              value="<?=$data['user']['username'];?>"
              name="username" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input 
              type="email"
              class="form-control"
              id="email"
              placeholder="Email"
              value="<?=$data['user']['email'];?>"
              name="email" required>
            </div>
            <div class="mb-3">
              <label for="nomor_hp" class="form-label">Phone Number</label>
              <input 
              type="text"
              class="form-control"
              id="nomor_hp"
              placeholder="Phone Number"
              value="<?=$data['user']['nomor_hp'];?>"
              name="nomor_hp" required>
            </div>
            <div class="mb-3">
              <label for="profesi" class="form-label">Profession</label>
              <input 
              type="text"
              class="form-control"
              id="profesi"
              placeholder="Profession"
              value="<?=$data['user']['profesi'];?>"
              name="profesi" required>
            </div>
            <div class="mb-3">
              <label for="tanggal_lahir" class="form-label">Born Date</label>
              <input 
              type="date"
              class="form-control"
              id="tanggal_lahir"
              placeholder="Born Date"
              value="<?=$data['user']['tanggal_lahir'];?>"
              name="tanggal_lahir" required>
            </div>
            <div class="mb-3">
              <div class="d-inline-block shadow-none">
                <div class="ms-2 form-check d-inline-block">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="male" value="Laki-laki" <?php if($data['user']['jenis_kelamin']=='Laki-laki') echo 'checked'?> > 
                  <label class="form-check-label" for="male">
                    Male
                  </label>
                </div>
                <div class="ms-1 form-check d-inline-block">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="female" value="Perempuan" <?php if($data['user']['jenis_kelamin']=='Perempuan') echo 'checked'?> >
                  <label class="form-check-label" for="female">
                    Female
                  </label>
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="alamat" class="form-label">Address</label>
              <textarea class="form-control"
              placeholder="Address"
              name="alamat" id="editor"
              value="<?=$data['user']['alamat'];?>"><?=$data['user']['alamat'];?></textarea>
            </div>
            <button type="submit" class="btn btn-success">
              Edit Profile
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
<script>
