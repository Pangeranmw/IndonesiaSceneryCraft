<?php 
  class UpdateCategory extends Controller{
    public function index($id = null){
      $data['aktif'] = 'category';
      $data['judul'] = 'Update category';
      $data['wilayah'] = $this->model("Wilayah_model")->add_ajax_prov();
      $data['kategori'] = $this->model("Category_model")->getAllCategoryById($id);
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/category/update', $data);
      $this->view('layouts/dashboard-footer', $data);
    }
    public function editcategory(){
      $tabel = "kategori";
      if($this->model('Category_model')->edit($_POST, $tabel)){
        echo
        "<script>
          alert('Data Berhasil Diedit');
          window.location='".BASEURL."/dashboard/category';
        </script>";
      }else{
        echo
        "<script>
          alert('Data Gagal Diedit');
          window.location='".BASEURL."/dashboard/category';
        </script>";
      }
    }
  }
?>
