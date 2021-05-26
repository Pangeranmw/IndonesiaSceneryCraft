<?php

class Upload_model {
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }
  public function upload($file){
    $namaFile = $file['foto']['name'];
    $ukuranFile = $file['foto']['size'];
    $tmpName = $file['foto']['tmp_name'];

    // cek ekstensi file yang diupload
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    // memecah nama file contoh gambar1.jpg akan menjadi (gambar1, jpg)
    $ekstensiGambar = explode('.', $namaFile);
    // mengambil ekstensi dengan memilih string terakhir dari gambar 
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if ($ukuranFile > 1000000){
        echo "
            <script>alert('ukuran gambar terlalu besar')</script>
        ";
        return false;
    }

    // cek ekstensi file yang diupload apakah sama dengan yang valid
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "
            <script>alert('yang diupload bukan gambar')</script>
        ";
        return false;
    }
    // lolos cek foto,generate nama file baru, 
    $namaFileBaru = uniqid('', true). '.'.$ekstensiGambar;
    move_uploaded_file($tmpName, 'assets/images/' . $namaFileBaru);
    return $namaFileBaru;
  }
}
