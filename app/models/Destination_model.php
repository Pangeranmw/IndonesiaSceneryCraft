<?php

class Destination_model {
  private $db;
  private $table = 'destinasi';

  public function __construct()
  {
    $this->db = new Database();
  }
  // public function getAllDestination(){
  //   $this->db->query('SELECT * FROM '.$this->table);
  //   $this->db->allSet();
  // }
  public function getAllDestination(){
    $this->db->query(
      'SELECT destinasi.nama_id AS nama_id, destinasi.nama_en AS nama_en, destinasi.artikel_id AS artikel_id, 
      destinasi.artikel_en AS artikel_en, destinasi.maps AS maps, destinasi.rating AS rating, desa.nama_desa AS nama_desa, 
      kecamatan.nama_kecamatan AS nama_kecamatan, kabupaten.nama_kabupaten AS nama_kabupaten, provinsi.nama_provinsi AS nama_provinsi 
      FROM destinasi 
      JOIN desa ON destinasi.id_lokasi = desa.id
      JOIN kecamatan ON desa.id = kecamatan.id
      JOIN kabupaten ON kecamatan.id = kabupaten.id
      JOIN provinsi ON kecamatan.id = provinsi.id
    ');
    $this->db->allSet();
  }
  public function tambahdestinasi($data){
    $query = "INSERT INTO destinasi VALUES ('0', :nama_id, :maps, :artikel_id, :rating, :artikel_en, :nama_en, :id_lokasi)";
    $this->db->query($query);
    $this->db->bind('nama_id', $data['nama_id']);
    $this->db->bind('maps', $data['maps']);
    $this->db->bind('artikel_id', $data['artikel_id']);
    $this->db->bind('rating', 0);
    $this->db->bind('artikel_en', $data['artikel_en']);
    $this->db->bind('nama_en', $data['nama_en']);
    $this->db->bind('id_lokasi', $data['id_lokasi']);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
