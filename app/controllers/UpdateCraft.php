<?php 
  class UpdateCraft extends Controller{
    public function index($id = null){
      $data['aktif'] = 'craft';
      $data['judul'] = 'Update Craft';
      $data['wilayah'] = $this->model("Wilayah_model")->add_ajax_prov();
      $data['kerajinan'] = $this->model("Craft_model")->getAllCraftById($id);
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/craft/update', $data);
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
    public function editcraft(){
      $tabel = "kerajinan";
      if($this->model('Craft_model')->edit($_POST, $tabel)){
        echo
        "<script>
          alert('Data Berhasil Diedit');
          window.location='".BASEURL."/dashboard/craft';
        </script>";
      }else{
        echo
        "<script>
          alert('Data Gagal Diedit');
          window.location='".BASEURL."/dashboard/craft';
        </script>";
      }
    }
  }
?>
