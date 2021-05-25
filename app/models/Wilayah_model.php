<?php

class Wilayah_model{
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }
  public function wilayah(){
    $query = "SELECT * FROM provinsi ORDER BY nama_provinsi ASC";
    $this->db->query($query);
    return $this->db->allSet();
  }

  public function data_wilayah(){
    switch ($_GET['jenis']){
      //ambil data kota / kabupaten
      case 'kota':
        $id_provinces = $_POST['id_provinces'];
        if($id_provinces == ''){
          exit;
        }else{
          $query = "SELECT  * FROM kabupaten WHERE province_id ='$id_provinces' ORDER BY nama_kabupaten ASC";
          $this->db->query($query);
          $result = $this->db->allSet();
          foreach( $result as $kota){
            echo '<option value="'.$kota['id'].'">'. $kota['nama_kabupaten'].'</option>';
          }
          exit;
        }
        break;
    
      //ambil data kecamatan
      case 'kecamatan':
        $id_regencies = $_POST['id_regencies'];
        if($id_regencies == ''){
          exit;
        }else{
          $query = "SELECT  * FROM kecamatan WHERE regency_id ='$id_regencies' ORDER BY nama_kecamatan ASC";
          $this->db->query($query);
          $result = $this->db->allSet();
          foreach( $result as $kecamatan){
            echo '<option value="'.$kecamatan['id'].'">'. $kecamatan['nama_kecamatan'].'</option>';
          }
          exit;
        }
        break;
      
  
      //ambil data kelurahan
      case 'kelurahan':
        $id_district = $_POST['id_district'];
        if($id_district == ''){
          exit;
        }else{
          $query = "SELECT  * FROM desa WHERE district_id ='$id_district' ORDER BY nama_desa ASC";
          $this->db->query($query);
          $result = $this->db->allSet();
          foreach( $result as $desa){
            echo '<option value="'.$desa['id'].'">'. $desa['nama_desa'].'</option>';
          }
          exit;
        }
        break;
      
    }
  }
}
