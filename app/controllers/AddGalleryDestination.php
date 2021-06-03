<?php 
  class AddGalleryDestination extends Controller{
    public function index(){
      $this->model('Language_model')->changeLanguage();
      if($_SESSION['login'] == 'admin'){
        $data['aktif'] = 'destination';
        $data['judul'] = 'Add Gallery Destination';
        $data['destination'] = $this->model("Destination_model")->getDestination();
        $this->view('layouts/dashboard-header', $data);
        $this->view('includes/dashboard-sidebar', $data);
        $this->view('includes/dashboard-navbar', $data);
        $this->view('dashboard/destination/addgallery', $data);
        $this->view('layouts/dashboard-footer', $data);
      }else{
        header('Location: '. BASEURL .'/loginadmin');
        exit;
      }
    }

    public function tambah(){
      $this->model('Language_model')->changeLanguage();
      $nama = $this->model('Upload_model')->upload($_FILES);
      if($this->model('Destination_model')->uploadtodb($nama, $_POST)>0){
          echo
          "<script>
            confirm('Add Gallery Success');
            window.location='".BASEURL."/dashboard/destination';
          </script>";
        }else{
          echo
          "<script>
            confirm('Add Gallery Failed');
            window.location='".BASEURL."/addgallerycraft';
          </script>";
        }
    }
  }
