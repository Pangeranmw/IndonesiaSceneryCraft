<?php 
  class AddGalleryCraft extends Controller{
    public function index(){
      $this->model('Language_model')->changeLanguage();
      if($_SESSION['login'] == 'admin'){
        $data['aktif'] = 'craft';
        $data['judul'] = 'Add Gallery Craft';
        $data['craft'] = $this->model("Craft_model")->getCraft();
        $this->view('layouts/dashboard-header', $data);
        $this->view('includes/dashboard-sidebar', $data);
        $this->view('includes/dashboard-navbar', $data);
        $this->view('dashboard/craft/addgallery', $data);
        $this->view('layouts/dashboard-footer', $data);
      }else{
        header('Location: '. BASEURL .'/loginadmin');
        exit;
      }
    }

    public function tambah(){
        $nama = $this->model('Upload_model')->upload($_FILES);
        if($this->model('Craft_model')->uploadtodb($nama, $_POST)>0){
            echo
            "<script>
              alert('Add Gallery Success');
              window.location='".BASEURL."/dashboard/craft';
            </script>";
          }else{
            echo
            "<script>
              alert('Add Gallery Failed');
              window.location='".BASEURL."/addgallerycraft';
            </script>";
          }
    }
  }
