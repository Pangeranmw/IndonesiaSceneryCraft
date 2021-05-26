<?php 
  class AddGalleryCulture extends Controller{
    public function index(){
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
        header('Location: http://localhost/ISC/public/loginadmin');
        exit;
      }
    }

    public function tambah(){
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
