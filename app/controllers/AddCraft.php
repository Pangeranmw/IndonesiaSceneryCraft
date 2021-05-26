<?php 
  class AddCraft extends Controller{
    public function index(){
      if($_SESSION['login'] == 'admin'){
        $data['aktif'] = 'craft';
        $data['judul'] = 'Add Craft';
        $data['wilayah'] = $this->model("Wilayah_model")->add_ajax_prov();
        $this->view('layouts/dashboard-header', $data);
        $this->view('includes/dashboard-sidebar', $data);
        $this->view('includes/dashboard-navbar', $data);
        $this->view('dashboard/craft/create', $data);
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
      if($this->model('Craft_model')->tambahkerajinan($_POST)>0){
        echo
        "<script>
          alert('Craft Successfully Added');
          window.location='".BASEURL."/dashboard/craft';
        </script>";
      }else{
        echo
        "<script>
          alert('Add Craft Failed');
          window.location='".BASEURL."/dashboard/craft';
        </script>";
      }
    }
  }
?>
