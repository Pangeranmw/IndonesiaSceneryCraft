<?php 
  class AddDestination extends Controller{
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
    public function index(){
      $data['aktif'] = 'destination';
      $data['judul'] = 'Add Destination';
      $data['wilayah'] = $this->model("Wilayah_model")->wilayah();
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/destination/create', $data);
      $this->view('layouts/dashboard-footer', $data);
    }
    public function add_ajax_kab($id_prov){
      $query = "SELECT  * FROM kabupaten WHERE province_id ='$id_prov' ORDER BY nama_kabupaten ASC";
      $this->db->query($query);
      $result = $this->db->allSet();
      $data = "<option value=''>- Select Kabupaten -</option>";
      foreach( $result as $kota){
        $data .= '<option value="'.$kota['id'].'">'. $kota['nama_kabupaten'].'</option>';
      }
      echo $data;
    }
    public function add_ajax_kec($id_kab){
      $query = "SELECT  * FROM kecamatan WHERE regency_id ='$id_kab' ORDER BY nama_kecamatan ASC";
      $this->db->query($query);
      $result = $this->db->allSet();
      $data = "<option value=''>- Select Kecamatan -</option>";
      foreach( $result as $kecamatan){
        $data .= '<option value="'.$kecamatan['id'].'">'. $kecamatan['nama_kecamatan'].'</option>';
      }
      echo $data;
    }
    public function add_ajax_des($id_kec){
      $query = "SELECT  * FROM desa WHERE district_id ='$id_kec' ORDER BY nama_desa ASC";
      $this->db->query($query);
      $result = $this->db->allSet();
      $data = "<option value=''>- Select Desa -</option>";
      foreach( $result as $desa){
        $data .= '<option value="'.$desa['id'].'">'. $desa['nama_desa'].'</option>';
      }
      echo $data;
    }
    public function tambah(){
      if($this->model('Destination_model')->tambahdestinasi($_POST)>0){
        echo
        "<script>
          alert('Registrasi berhasil');
          window.location='".BASEURL."dashboard/destination';
        </script>";
      }else{
        echo
        "<script>
          alert('Add Destination Failed');
          window.location='".BASEURL."dashboard/destination';
        </script>";
      }
    }
  }
?>
