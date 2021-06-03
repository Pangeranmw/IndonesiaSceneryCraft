<?php 
  class AddCategoryDestination extends Controller{
    public function index(){
      $this->model('Language_model')->changeLanguage();
      if($_SESSION['login'] == 'admin'){
        $data['aktif'] = 'destination';
        $data['judul'] = 'Add Category Destination';
        $data['destinasi']=$this->model('Destination_model')->getDestination();
        $data['kategori']=$this->model('Category_model')->getAllCategory();
        $this->view('layouts/dashboard-header', $data);
        $this->view('includes/dashboard-sidebar', $data);
        $this->view('includes/dashboard-navbar', $data);
        $this->view('dashboard/destination/addcategory', $data);
        $this->view('layouts/dashboard-footer', $data);
      }else{
        header('Location: '. BASEURL .'/loginadmin');
        exit;
      }
    }
    public function tambah(){
      if($this->model('Destination_model')->tambahkategori($_POST)>0){
        echo
        "<script>
          alert('Destination Category Successfully Added');
          window.location='".BASEURL."/dashboard/destination';
        </script>";
      }else{
        echo
        "<script>
          alert('Add Destination Category Failed');
          window.location='".BASEURL."/dashboard/destination';
        </script>";
      }
    }
  }
?>
