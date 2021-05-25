<?php 
  class AddCategory extends Controller{
    public function index(){
      $data['aktif'] = 'category';
      $data['judul'] = 'Add Category';
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/category/create', $data);
      $this->view('layouts/dashboard-footer', $data);
    }
    public function tambah(){
      if($this->model('Category_model')->tambahkategori($_POST)>0){
        echo
        "<script>
          alert('Category Successfully Added');
          window.location='".BASEURL."/dashboard/category';
        </script>";
      }else{
        echo
        "<script>
          alert('Add Category Failed');
          window.location='".BASEURL."/dashboard/category';
        </script>";
      }
    }
  }
?>
