<?php 
  class AddCategoryCraft extends Controller{
    public function index(){
      if($_SESSION['login'] == 'admin'){
        $data['aktif'] = 'craft';
        $data['judul'] = 'Add Category Craft';
        $data['kerajinan']=$this->model('Craft_model')->getCraft();
        $data['kategori']=$this->model('Category_model')->getAllCategory();
        $data['kategori_craft']=$this->model('Craft_model')->getAllCategoryCraft();
        $this->view('layouts/dashboard-header', $data);
        $this->view('includes/dashboard-sidebar', $data);
        $this->view('includes/dashboard-navbar', $data);
        $this->view('dashboard/craft/addcategory', $data);
        $this->view('layouts/dashboard-footer', $data);
      }else{
        header('Location: http://localhost/ISC/public/loginadmin');
        exit;
      }
    }
    public function tambah(){
      if($this->model('Craft_model')->tambahkategori($_POST)>0){
        echo
        "<script>
          alert('Craft Category Successfully Added');
          window.location='".BASEURL."/dashboard/craft';
        </script>";
      }else{
        echo
        "<script>
          alert('Add Craft Category Failed');
          window.location='".BASEURL."/dashboard/craft';
        </script>";
      }
    }
  }
?>
