<?php 
  class AddDestination extends Controller{
    public function index(){
      if($_SESSION['login'] == 'admin'){
        $data['aktif'] = 'destination';
        $data['judul'] = 'Add Destination';
        $data['wilayah'] = $this->model("Wilayah_model")->add_ajax_prov();
        $this->view('layouts/dashboard-header', $data);
        $this->view('includes/dashboard-sidebar', $data);
        $this->view('includes/dashboard-navbar', $data);
        $this->view('dashboard/destination/create', $data);
        $this->view('layouts/dashboard-footer', $data);
      }else{
        header('Location: http://localhost/ISC/public/loginadmin');
        exit;
      }
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
