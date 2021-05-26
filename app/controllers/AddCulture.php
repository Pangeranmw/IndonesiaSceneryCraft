<?php 
  class AddCulture extends Controller{
    public function index(){
      if($_SESSION['login'] == 'admin'){
        $data['aktif'] = 'culture';
        $data['judul'] = 'Add Culture';
        $data['wilayah'] = $this->model("Wilayah_model")->add_ajax_prov();
        $this->view('layouts/dashboard-header', $data);
        $this->view('includes/dashboard-sidebar', $data);
        $this->view('includes/dashboard-navbar', $data);
        $this->view('dashboard/culture/create', $data);
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
      if($this->model('Culture_model')->tambahbudaya($_POST)>0){
        echo
        "<script>
          alert('Culture Successfully Added');
          window.location='".BASEURL."/dashboard/culture';
        </script>";
      }else{
        echo
        "<script>
          alert('Add Culture Failed');
          window.location='".BASEURL."/dashboard/culture';
        </script>";
      }
    }
  }
?>
