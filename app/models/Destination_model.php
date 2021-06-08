<?php

class Destination_model {
  private $db;
  private $table = 'destinasi';

  public function __construct()
  {
    $this->db = new Database();
  }public function selectkategori($kategori){
    $this->db->query("SELECT * FROM kategori WHERE id in($kategori)");
    return $this->db->allSet();
  }public function getAlldatadestinastionwithgallery(){
    $this->db->query(
      'SELECT DISTINCT kategori.kategori_id as kategori, destinasi.rating as rating, destinasi.id as id_destination, destinasi.nama_id AS nama_id, gallery_destination.foto as gallery, destinasi.nama_en AS nama_en, destinasi.artikel_id AS artikel_id, destinasi.artikel_en AS artikel_en, destinasi.maps AS maps, destinasi.rating AS rating, 
      desa.nama_desa AS nama_desa, kecamatan.nama_kecamatan AS nama_kecamatan, kabupaten.nama_kabupaten AS nama_kabupaten, provinsi.nama_provinsi AS nama_provinsi 
      FROM destinasi JOIN desa ON destinasi.id_lokasi = desa.id 
      JOIN kecamatan ON desa.district_id = kecamatan.id 
      JOIN kabupaten ON kecamatan.regency_id = kabupaten.id 
      JOIN provinsi ON kabupaten.province_id = provinsi.id
      JOIN gallery_destination ON gallery_destination.id_destination = destinasi.id
      JOIN kategori_destinasi ON destinasi.id = kategori_destinasi.id_destinasi
      JOIN kategori ON kategori.id = kategori_destinasi.id_kategori
      GROUP BY gallery_destination.id_destination
    ');
    return $this->db->allSet();
  }public function getnamakabupaten($id){
    $this->db->query(
      "SELECT SUBSTRING(nama_kabupaten,11) AS nama_kabupaten FROM kabupaten WHERE id IN ($id)
    ");
    return $this->db->allSet();
  }public function getAlldatadestinastionrekomendation(){
    $this->db->query(
      'SELECT destinasi.id as id_destination, gallery_destination.foto as gallery, destinasi.nama_id AS nama_id, destinasi.nama_en AS nama_en, destinasi.artikel_id AS artikel_id, destinasi.artikel_en AS artikel_en, destinasi.maps AS maps, destinasi.rating AS rating, 
      desa.nama_desa AS nama_desa, kecamatan.nama_kecamatan AS nama_kecamatan, kabupaten.id as id_kabupaten, kabupaten.nama_kabupaten AS nama_kabupaten, provinsi.id as id_provinsi, provinsi.nama_provinsi AS nama_provinsi 
      FROM destinasi JOIN desa ON destinasi.id_lokasi = desa.id 
      JOIN gallery_destination ON gallery_destination.id_destination = destinasi.id
      JOIN kecamatan ON desa.district_id = kecamatan.id 
      JOIN kabupaten ON kecamatan.regency_id = kabupaten.id 
      JOIN provinsi ON kabupaten.province_id = provinsi.id
      GROUP BY  provinsi.nama_provinsi
      ORDER BY destinasi.rating DESC
    ');
    return $this->db->allSet();
  }
  public function getAlldatadestinastion(){
    $this->db->query(
      'SELECT destinasi.id as id_destination, destinasi.nama_id AS nama_id, destinasi.nama_en AS nama_en, destinasi.artikel_id AS artikel_id, destinasi.artikel_en AS artikel_en, destinasi.maps AS maps, destinasi.rating AS rating, 
      desa.nama_desa AS nama_desa, kecamatan.nama_kecamatan AS nama_kecamatan, kabupaten.id as id_kabupaten, IF(kabupaten.nama_kabupaten LIKE "%kabupaten%", SUBSTRING(nama_kabupaten,11), SUBSTRING(nama_kabupaten,6)) AS nama_kabupaten, provinsi.id as id_provinsi, provinsi.nama_provinsi AS nama_provinsi 
      FROM destinasi JOIN desa ON destinasi.id_lokasi = desa.id 
      JOIN kecamatan ON desa.district_id = kecamatan.id 
      JOIN kabupaten ON kecamatan.regency_id = kabupaten.id 
      JOIN provinsi ON kabupaten.province_id = provinsi.id
      GROUP BY  kabupaten.nama_kabupaten
    ');
    return $this->db->allSet();
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
  public function getDestinationGallerybyId($id){
    $this->db->query('SELECT * 
      FROM gallery_destination
      WHERE gallery_destination.id_destination=:id
    ');
    $this->db->bind('id',$id);
    return $this->db->allSet();
  }
  public function getAllGaleryDestination(){
    $this->db->query(
      'SELECT destinasi.nama_id AS nama_id, destinasi.nama_en AS nama_en, gallery_destination.id AS id,gallery_destination.foto AS gallery
      FROM destinasi JOIN gallery_destination ON destinasi.id = gallery_destination.id_destination
    ');
    return $this->db->allSet();
  }public function getAllCategoryDestinationgroupby(){
    $this->db->query(
      'SELECT 
          kategori_destinasi.id AS id,
          kategori.id AS id_kategori,
          destinasi.id AS id_destinasi,
          destinasi.nama_id AS nama_id, destinasi.nama_en AS nama_en, kategori.kategori_id AS kategori_id,kategori.kategori_en AS kategori_en
          FROM kategori_destinasi
          JOIN destinasi ON kategori_destinasi.id_destinasi = destinasi.id 
          JOIN kategori ON kategori_destinasi.id_kategori = kategori.id 
          GROUP BY kategori.kategori_id
    ');
    return $this->db->allSet();
  }
  public function getAllCategoryDestination(){
    $this->db->query(
      'SELECT 
          kategori_destinasi.id AS id,
          kategori.id AS id_kategori,
          destinasi.id AS id_destinasi,
          destinasi.nama_id AS nama_id, destinasi.nama_en AS nama_en, kategori.kategori_id AS kategori_id,kategori.kategori_en AS kategori_en
          FROM kategori_destinasi
          JOIN destinasi ON kategori_destinasi.id_destinasi = destinasi.id 
          JOIN kategori ON kategori_destinasi.id_kategori = kategori.id 
    ');
    return $this->db->allSet();
  }
  public function getAllDestination(){
    $this->db->query(
      'SELECT destinasi.id AS id, destinasi.nama_id AS nama_id, destinasi.nama_en AS nama_en, destinasi.artikel_id AS artikel_id, destinasi.artikel_en AS artikel_en, destinasi.maps AS maps, destinasi.rating AS rating, 
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
  }public function getAllDestinationConditionLocation($lokasi){
    $this->db->query(
      "SELECT kategori.kategori_id as kategori_id,kategori.kategori_en as kategori_en, gallery_destination.foto as gallery, destinasi.id AS id_destination, destinasi.nama_id AS nama_id, destinasi.nama_en AS nama_en, 
        destinasi.artikel_id AS artikel_id,
        destinasi.artikel_en AS artikel_en,
        destinasi.rating AS rating, 
        destinasi.maps AS maps, 
        desa.id AS id_desa, desa.nama_desa AS nama_desa, 
        kecamatan.id AS id_kecamatan, kecamatan.nama_kecamatan AS nama_kecamatan, 
        kabupaten.id AS id_kabupaten, kabupaten.nama_kabupaten AS nama_kabupaten, 
        provinsi.id AS id_provinsi, provinsi.nama_provinsi AS nama_provinsi 
        FROM destinasi
        JOIN gallery_destination ON destinasi.id = gallery_destination.id_destination
        JOIN desa ON destinasi.id_lokasi = desa.id 
        JOIN kecamatan ON desa.district_id = kecamatan.id 
        JOIN kabupaten ON kecamatan.regency_id = kabupaten.id 
        JOIN provinsi ON kabupaten.province_id = provinsi.id
        JOIN kategori_destinasi ON destinasi.id = kategori_destinasi.id_destinasi
        JOIN kategori ON kategori.id = kategori_destinasi.id_kategori
        WHERE kabupaten.id IN ($lokasi)
        GROUP BY destinasi.nama_id
    ");
    // $this->db->bind('destinasi.id',$id);
    return $this->db->allSet();
  }public function getAllDestinationConditionCategory($lokasi){
    $this->db->query(
      "SELECT kategori.kategori_id as kategori_id,kategori.kategori_en as kategori_en, gallery_destination.foto as gallery, destinasi.id AS id_destination, destinasi.nama_id AS nama_id, destinasi.nama_en AS nama_en, 
        destinasi.artikel_id AS artikel_id,
        destinasi.artikel_en AS artikel_en,
        destinasi.rating AS rating, 
        destinasi.maps AS maps, 
        desa.id AS id_desa, desa.nama_desa AS nama_desa, 
        kecamatan.id AS id_kecamatan, kecamatan.nama_kecamatan AS nama_kecamatan, 
        kabupaten.id AS id_kabupaten, kabupaten.nama_kabupaten AS nama_kabupaten, 
        provinsi.id AS id_provinsi, provinsi.nama_provinsi AS nama_provinsi 
        FROM destinasi
        JOIN gallery_destination ON destinasi.id = gallery_destination.id_destination
        JOIN desa ON destinasi.id_lokasi = desa.id 
        JOIN kecamatan ON desa.district_id = kecamatan.id 
        JOIN kabupaten ON kecamatan.regency_id = kabupaten.id 
        JOIN provinsi ON kabupaten.province_id = provinsi.id
        JOIN kategori_destinasi ON destinasi.id = kategori_destinasi.id_destinasi
        JOIN kategori ON kategori.id = kategori_destinasi.id_kategori
        WHERE kategori.id IN ($lokasi)
        GROUP BY destinasi.nama_id
    ");
    // $this->db->bind('destinasi.id',$id);
    return $this->db->allSet();
  }
  public function getAllDestinationById($id){
    $this->db->query(
      "SELECT destinasi.id AS id, destinasi.nama_id AS nama_id, destinasi.nama_en AS nama_en, 
        destinasi.artikel_id AS artikel_id,
        destinasi.artikel_en AS artikel_en,
        destinasi.rating AS rating, 
        destinasi.maps AS maps, 
        desa.id AS id_desa, desa.nama_desa AS nama_desa, 
        kecamatan.id AS id_kecamatan, kecamatan.nama_kecamatan AS nama_kecamatan, 
        kabupaten.id AS id_kabupaten, kabupaten.nama_kabupaten AS nama_kabupaten, 
        provinsi.id AS id_provinsi, provinsi.nama_provinsi AS nama_provinsi 
        FROM destinasi
        JOIN desa ON destinasi.id_lokasi = desa.id 
        JOIN kecamatan ON desa.district_id = kecamatan.id 
        JOIN kabupaten ON kecamatan.regency_id = kabupaten.id 
        JOIN provinsi ON kabupaten.province_id = provinsi.id
        WHERE destinasi.id='$id'
    ");
    // $this->db->bind('destinasi.id',$id);
    return $this->db->singleSet();
  }public function tambahkategori($data){
    $query = "INSERT INTO kategori_destinasi VALUES (:id_kategori, :id_destinasi, '0')";
    $this->db->query($query);
    $this->db->bind('id_kategori', $data['id_kategori']);
    $this->db->bind('id_destinasi', $data['id_destinasi']);
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
