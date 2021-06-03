<?php

class Wilayah_model{
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }
  public function add_ajax_prov(){
    $query = "SELECT * FROM provinsi ORDER BY nama_provinsi ASC";
    $this->db->query($query);
    return $this->db->allSet();
  }
  public function add_ajax_kab($id_prov){
    $query = "SELECT  * FROM kabupaten WHERE province_id ='$id_prov' ORDER BY nama_kabupaten ASC";
    $this->db->query($query);
    $result = $this->db->allSet();
    $data = "<option value=''> Select Kabupaten </option>";
    foreach( $result as $kota){
      $data .= '<option value="'.$kota['id'].'">'. $kota['nama_kabupaten'].'</option>';
    }
    echo $data;
  }
  public function add_ajax_kec($id_kab){
    $query = "SELECT  * FROM kecamatan WHERE regency_id ='$id_kab' ORDER BY nama_kecamatan ASC";
    $this->db->query($query);
    $result = $this->db->allSet();
    $data = "<option value=''> Select Kecamatan </option>";
    foreach( $result as $kecamatan){
      $data .= '<option value="'.$kecamatan['id'].'">'. $kecamatan['nama_kecamatan'].'</option>';
    }
    echo $data;
  }
  public function add_ajax_des($id_kec){
    $query = "SELECT  * FROM desa WHERE district_id ='$id_kec' ORDER BY nama_desa ASC";
    $this->db->query($query);
    $result = $this->db->allSet();
    $data = "<option value=''> Select Desa </option>";
    foreach( $result as $desa){
      $data .= '<option value="'.$desa['id'].'">'. $desa['nama_desa'].'</option>';
    }
    echo $data;
  }
  // public function getFullLocation($id_desa){
  //   $this->db->query('SELECT nama_desa FROM desa WHERE id=:id_desa');
  //   $this->db->bind('id', $id_desa);
  //   $desa = $this->db->singleSet();
  //   $this->db->query('SELECT nama_kecamatan FROM kecamatan WHERE id=:id_desa');
  //   $this->db->bind('id', $id_desa);
  //   $kecamatan = $this->db->singleSet();
  //   $location = $desa . ', ' . $kecamatan . ', '.$kabupaten.', '. $provinsi;
  // }
}
