<?php 
  class UpdateCulture extends Controller{
    public function index($id = null){
      $data['aktif'] = 'culture';
      $data['judul'] = 'Update culture';
      $data['wilayah'] = $this->model("Wilayah_model")->add_ajax_prov();
      $data['budaya'] = $this->model("Culture_model")->getAllCultureById($id);
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/culture/update', $data);
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
    public function editculture(){
      $tabel = "budaya";
      if($this->model('Culture_model')->edit($_POST, $tabel)){
        echo
        "<script>
          alert('Data Berhasil Diedit');
          window.location='".BASEURL."/dashboard/culture';
        </script>";
      }else{
        echo
        "<script>
          alert('Data Gagal Diedit');
          window.location='".BASEURL."/dashboard/culture';
        </script>";
      }
    }
  }
?>
