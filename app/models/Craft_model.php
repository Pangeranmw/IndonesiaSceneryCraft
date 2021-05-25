<?php

class Craft_model {
  private $db;
  public function __construct()
  {
    $this->db = new Database();
  }
  public function getAllCraft(){
    $this->db->query(
      'SELECT kerajinan.nama_id AS nama_id, kerajinan.nama_en AS nama_en, 
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
}
