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

    // lolos cek foto,generate nama file baru, 
    $namaFileBaru = uniqid('', true). '.'.$ekstensiGambar;

    // cek ekstensi file yang diupload apakah sama dengan yang valid
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)){
      // echo "
      //     <script>alert('yang diupload bukan gambar')</script>
      // ";
      return false;
    }
    // function compressImage($source, $destination, $quality) {
    //   $info = getimagesize($source);
    //   if ($info['mime'] == 'image/jpeg') 
    //     $image = imagecreatefromjpeg($source);
    //   elseif ($info['mime'] == 'image/gif') 
    //     $image = imagecreatefromgif($source);
    //   elseif ($info['mime'] == 'image/png') 
    //     $image = imagecreatefrompng($source);
    //   imagejpeg($image, $destination, $quality);
    // }

    if ($ukuranFile > 1000000){
        // echo "
        //     <script>alert('ukuran gambar terlalu besar')</script>
        // ";
      // compressImage($tmpName,'assets/images/'.$namaFileBaru,50);
      return false;
    } 
    // else {
    //   compressImage($tmpName,'assets/images/'.$namaFileBaru,100);
    // }
    
    move_uploaded_file($tmpName, 'assets/images/' . $namaFileBaru);
    return $namaFileBaru;
  }
  
}
