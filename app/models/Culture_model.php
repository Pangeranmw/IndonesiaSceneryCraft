<?php

class Culture_model {
  private $db;
  public function __construct()
  {
    $this->db = new Database();
  }
  public function getAllCulture(){
    $this->db->query(
      'SELECT budaya.nama_id AS nama_id, budaya.nama_en AS nama_en, budaya.artikel_id AS artikel_id, budaya.artikel_en AS artikel_en, budaya.maps AS maps, budaya.rating AS rating, 
        desa.nama_desa AS nama_desa, kecamatan.nama_kecamatan AS nama_kecamatan, kabupaten.nama_kabupaten AS nama_kabupaten, provinsi.nama_provinsi AS nama_provinsi 
        FROM budaya JOIN desa ON budaya.id_lokasi = desa.id 
        JOIN kecamatan ON desa.district_id = kecamatan.id 
        JOIN kabupaten ON kecamatan.regency_id = kabupaten.id 
        JOIN provinsi ON kabupaten.province_id = provinsi.id
    ');
    return $this->db->allSet();
  }
  public function tambahbudaya($data){
    $query = "INSERT INTO budaya VALUES ('0', :nama_id, :maps, :artikel_id, :artikel_en, :nama_en, :id_lokasi, :rating)";
    $this->db->query($query);
    $this->db->bind('nama_id', $data['nama_id']);
    $this->db->bind('maps', $data['maps']);
    $this->db->bind('artikel_id', $data['artikel_id']);
    $this->db->bind('artikel_en', $data['artikel_en']);
    $this->db->bind('nama_en', $data['nama_en']);
    $this->db->bind('id_lokasi', $data['id_lokasi']);
    $this->db->bind('rating', 0);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
