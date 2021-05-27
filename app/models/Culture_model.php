<?php

class Culture_model {
  private $db;
  private $table = 'budaya';
  public function __construct()
  {
    $this->db = new Database();
  }
  public function getCulture(){
    $this->db->query('SELECT * FROM '.$this->table);
    return $this->db->allSet();
  }
  public function getCulturebyId($id){
    $this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
    $this->db->bind('id',$id);
    return $this->db->singleSet();
  }
  public function getAllGaleryCulture(){
    $this->db->query(
      'SELECT budaya.nama_id AS nama_id, budaya.nama_en AS nama_en, gallery_budaya.id AS id,gallery_budaya.foto AS gallery
      FROM budaya JOIN gallery_budaya ON budaya.id = gallery_budaya.id_budaya
    ');
    return $this->db->allSet();
  }
  public function getAllCultureById($id){
    $this->db->query(
      "SELECT budaya.id AS id, budaya.nama_id AS nama_id, budaya.nama_en AS nama_en, 
        budaya.artikel_id AS artikel_id,
        budaya.artikel_en AS artikel_en,
        budaya.rating AS rating, 
        budaya.maps AS maps, 
        desa.id AS id_desa, desa.nama_desa AS nama_desa, 
        kecamatan.id AS id_kecamatan, kecamatan.nama_kecamatan AS nama_kecamatan, 
        kabupaten.id AS id_kabupaten, kabupaten.nama_kabupaten AS nama_kabupaten, 
        provinsi.id AS id_provinsi, provinsi.nama_provinsi AS nama_provinsi 
        FROM budaya
        JOIN desa ON budaya.id_lokasi = desa.id 
        JOIN kecamatan ON desa.district_id = kecamatan.id 
        JOIN kabupaten ON kecamatan.regency_id = kabupaten.id 
        JOIN provinsi ON kabupaten.province_id = provinsi.id
        WHERE budaya.id='$id'
    ");
    // $this->db->bind('budaya.id',$id);
    return $this->db->singleSet();
  }
  public function getAllCulture(){
    $this->db->query(
      'SELECT budaya.id AS id, budaya.nama_id AS nama_id, budaya.nama_en AS nama_en, budaya.artikel_id AS artikel_id, budaya.artikel_en AS artikel_en, budaya.maps AS maps, budaya.rating AS rating, 
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
  public function uploadtodb($nama, $post){
    $query = "INSERT INTO gallery_budaya VALUES ('0', :id_budaya, :foto)";
    $this->db->query($query);
    $this->db->bind('id_budaya', $post['id_budaya'] );
    $this->db->bind('foto', $nama);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function delete($id, $table){
    $query = "DELETE FROM ". $table ." WHERE id =:id";
    $this->db->query($query);
    $this->db->bind('id',$id);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function edit($data, $table){
    $query = "UPDATE ". $table .
             " SET id=:id, nama_id=:nama_id, maps=:maps, artikel_id=:artikel_id, artikel_en=:artikel_en, nama_en=:nama_en, id_lokasi=:id_lokasi, rating=:rating 
              WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $data['id']);
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
