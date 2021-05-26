<?php

class Craft_model {
  private $db;
  private $table = 'kerajinan';
  public function __construct()
  {
    $this->db = new Database();
  }
  public function getCraft(){
    $this->db->query('SELECT * FROM '.$this->table);
    return $this->db->allSet();
  }
  public function getCraftbyId($id){
    $this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
    $this->db->bind('id',$id);
    return $this->db->singleSet();
  }
  public function getAllGaleryCraft(){
    $this->db->query(
      'SELECT kerajinan.nama_id AS nama_id, kerajinan.nama_en AS nama_en, gallery_kerajinan.id AS id,gallery_kerajinan.foto AS gallery
      FROM kerajinan JOIN gallery_kerajinan ON kerajinan.id = gallery_kerajinan.id_kerajinan
    ');
    return $this->db->allSet();
  }
  public function getAllCategoryCraft(){
    $this->db->query(
      'SELECT 
      kategori_kerajinan.id AS id,
      kerajinan.nama_id AS nama_id, 
      kerajinan.nama_en AS nama_en, 
      kategori.kategori_id AS kategori_id,
      kategori.kategori_en AS kategori_en,
      kategori_kerajinan.id_kategori AS id_kategori
      FROM kategori_kerajinan 
      JOIN kerajinan ON kategori_kerajinan.id_kerajinan = kerajinan.id 
      JOIN kategori ON kategori_kerajinan.id_kategori = kategori.id 
    ');
    return $this->db->allSet();
  }
  public function getAllCraftById($id){
    $this->db->query(
      "SELECT kerajinan.id AS id, kerajinan.nama_id AS nama_id, kerajinan.nama_en AS nama_en, 
        kerajinan.stok AS stok, 
        kerajinan.harga AS harga, 
        kerajinan.deskripsi_id AS deskripsi_id, 
        kerajinan.deskripsi_en AS deskripsi_en,
        kerajinan.rating AS rating, 
        desa.id AS id_desa, desa.nama_desa AS nama_desa, 
        kecamatan.id AS id_kecamatan, kecamatan.nama_kecamatan AS nama_kecamatan, 
        kabupaten.id AS id_kabupaten, kabupaten.nama_kabupaten AS nama_kabupaten, 
        provinsi.id AS id_provinsi, provinsi.nama_provinsi AS nama_provinsi 
        FROM kerajinan
        JOIN desa ON kerajinan.id_lokasi = desa.id 
        JOIN kecamatan ON desa.district_id = kecamatan.id 
        JOIN kabupaten ON kecamatan.regency_id = kabupaten.id 
        JOIN provinsi ON kabupaten.province_id = provinsi.id
        WHERE kerajinan.id='$id'
    ");
    // $this->db->bind('kerajinan.id',$id);
    return $this->db->singleSet();
  }
  public function getAllCraft(){
    $this->db->query(
      'SELECT kerajinan.id AS id, kerajinan.nama_id AS nama_id, kerajinan.nama_en AS nama_en, 
        kerajinan.stok AS stok,
        kerajinan.harga AS harga, 
        kerajinan.deskripsi_id AS deskripsi_id, 
        kerajinan.deskripsi_en AS deskripsi_en,
        kerajinan.rating AS rating, 
        desa.nama_desa AS nama_desa, kecamatan.nama_kecamatan AS nama_kecamatan, kabupaten.nama_kabupaten AS nama_kabupaten, provinsi.nama_provinsi AS nama_provinsi 
        FROM kerajinan JOIN desa ON kerajinan.id_lokasi = desa.id 
        JOIN kecamatan ON desa.district_id = kecamatan.id 
        JOIN kabupaten ON kecamatan.regency_id = kabupaten.id 
        JOIN provinsi ON kabupaten.province_id = provinsi.id
    ');
    return $this->db->allSet();
  }
  // FIXME: Uncaught PDOException: SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails
  public function tambahkategori($data){
    $query = "INSERT INTO kategori_kerajinan VALUES ('0', :id_kategori, :id_kerajinan)";
    $this->db->query($query);
    $this->db->bind('id_kategori', $data['id_kategori']);
    $this->db->bind('id_kerajinan', $data['id_kerajinan']);
    $this->db->execute();
    return $this->db->rowCount();
  }
  public function tambahkerajinan($data){
    $query = "INSERT INTO kerajinan VALUES ('0', :nama_id, :harga, :rating, :stok, :nama_en, :deskripsi_id, :deskripsi_en, :id_lokasi)";
    $this->db->query($query);
    $this->db->bind('nama_id', $data['nama_id']);
    $this->db->bind('harga', $data['harga']);
    $this->db->bind('rating', 0);
    $this->db->bind('stok', $data['stok']);
    $this->db->bind('nama_en', $data['nama_en']);
    $this->db->bind('deskripsi_id', $data['deskripsi_id']);
    $this->db->bind('deskripsi_en', $data['deskripsi_en']);
    $this->db->bind('id_lokasi', $data['id_lokasi']);
    $this->db->execute();
    return $this->db->rowCount();
  }
  public function uploadtodb($nama, $post){
    $query = "INSERT INTO gallery_kerajinan VALUES ('0', :id_kerajinan, :foto)";
    $this->db->query($query);
    $this->db->bind('id_kerajinan', $post['id_kerajinan'] );
    $this->db->bind('foto', $nama);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function delete($id, $table){
    $query = "DELETE FROM ". $table ." WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id',$id);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function edit($data, $table){
    $query = "UPDATE ". $table .
             " SET id=:id, nama_id=:nama_id, harga=:harga, rating=:rating, stok=:stok, nama_en=:nama_en, deskripsi_id=:deskripsi_id, deskripsi_en=:deskripsi_en, id_lokasi=:id_lokasi 
              WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('nama_id', $data['nama_id']);
    $this->db->bind('harga', $data['harga']);
    $this->db->bind('rating', 0);
    $this->db->bind('stok', $data['stok']);
    $this->db->bind('nama_en', $data['nama_en']);
    $this->db->bind('deskripsi_id', $data['deskripsi_id']);
    $this->db->bind('deskripsi_en', $data['deskripsi_en']);
    $this->db->bind('id_lokasi', $data['id_lokasi']);
    $this->db->execute();
    return $this->db->rowCount();
  }
}
