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
      $data['wilayah'] = $this->model("Wilayah_model")->add_ajax_prov();
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/destination/create', $data);
      $this->view('layouts/dashboard-footer', $data);
    }
    public function add_ajax_kab($id_prov){
      $this->model("Wilayah_model")->add_ajax_kab($id_prov);
    }
    public function add_ajax_kec($id_kab){
      $this->model("Wilayah_model")->add_ajax_kec($id_kab);
    }
    public function add_ajax_des($id_kec){
      $this->model("Wilayah_model")->add_ajax_des($id_kec);
    }
    public function tambah(){
      if($this->model('Destination_model')->tambahdestinasi($_POST)>0){
        echo
        "<script>
          alert('Destination Successfully Added');
          window.location='".BASEURL."/dashboard/destination';
        </script>";
      }else{
        echo
        "<script>
          alert('Add Destination Failed');
          window.location='".BASEURL."/dashboard/destination';
        </script>";
      }
    }
  }
?>
