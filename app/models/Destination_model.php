<?php

class Destination_model {
  private $db;
  private $table = 'destinasi';

  public function __construct()
  {
    $this->db = new Database();
  }
  public function getDestination(){
    $this->db->query('SELECT * FROM '.$this->table);
    return $this->db->allSet();
  }
  public function getDestinationbyId($id){
    $this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
    $this->db->bind('id',$id);
    return $this->db->singleSet();
  }
  public function getAllGaleryDestination(){
    $this->db->query(
      'SELECT destinasi.nama_id AS nama_id, destinasi.nama_en AS nama_en, gallery_destination.id AS id,gallery_destination.foto AS gallery
      FROM destinasi JOIN gallery_destination ON destinasi.id = gallery_destination.id_destination
    ');
    return $this->db->allSet();
  }
  public function getAllDestination(){
    $this->db->query(
      'SELECT destinasi.nama_id AS nama_id, destinasi.nama_en AS nama_en, destinasi.artikel_id AS artikel_id, destinasi.artikel_en AS artikel_en, destinasi.maps AS maps, destinasi.rating AS rating, 
        desa.nama_desa AS nama_desa, kecamatan.nama_kecamatan AS nama_kecamatan, kabupaten.nama_kabupaten AS nama_kabupaten, provinsi.nama_provinsi AS nama_provinsi 
        FROM destinasi JOIN desa ON destinasi.id_lokasi = desa.id 
        JOIN kecamatan ON desa.district_id = kecamatan.id 
        JOIN kabupaten ON kecamatan.regency_id = kabupaten.id 
        JOIN provinsi ON kabupaten.province_id = provinsi.id
    ');
    return $this->db->allSet();
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
  public function uploadtodb($nama, $post){
    $query = "INSERT INTO gallery_destination VALUES ('0', :id_destination, :foto)";
    $this->db->query($query);
    $this->db->bind('id_destination', $post['id_destination'] );
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
             " SET id=:id, nama_id=:nama_id, maps=:maps, artikel_id=:artikel_id, rating=:rating, artikel_en=:artikel_en, nama_en=:nama_en, id_lokasi=:id_lokasi 
              WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $data['id']);
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
