<?php 
  class AddGalleryCulture extends Controller{
    public function index(){
      $this->model('Language_model')->changeLanguage();
      if($_SESSION['login'] == 'admin'){
        $data['aktif'] = 'culture';
        $data['judul'] = 'Add Gallery Culture';
        $data['culture'] = $this->model("Culture_model")->getCulture();
        $this->view('layouts/dashboard-header', $data);
        $this->view('includes/dashboard-sidebar', $data);
        $this->view('includes/dashboard-navbar', $data);
        $this->view('dashboard/culture/addgallery', $data);
        $this->view('layouts/dashboard-footer', $data);
      }else{
        header('Location: '. BASEURL .'/loginadmin');
        exit;
      }
    }

    public function tambah(){
      $this->model('Language_model')->changeLanguage();
        $nama = $this->model('Upload_model')->upload($_FILES);
        if($this->model('Culture_model')->uploadtodb($nama, $_POST)>0){
            echo
            "<script>
              confirm('Add Gallery Success');
              window.location='".BASEURL."/dashboard/culture';
            </script>";
          }else{
            echo
            "<script>
              confirm('Add Gallery Failed');
              window.location='".BASEURL."/addgalleryculture';
            </script>";
          }
    }
  }
