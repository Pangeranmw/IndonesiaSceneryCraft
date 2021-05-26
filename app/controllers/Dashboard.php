<?php 
  class Dashboard extends Controller{
    public function index(){
      if($_SESSION['login'] == 'admin'){
        $data['aktif'] = 'destination';
        $data['judul'] = 'Destination Dashboard';
        $data['destinasi'] = $this->model('Destination_model')->getAllDestination();
        $this->view('layouts/dashboard-header', $data);
        $this->view('includes/dashboard-sidebar', $data);
        $this->view('includes/dashboard-navbar', $data);
        $this->view('dashboard/destination', $data);
        $this->view('layouts/dashboard-footer', $data);
      }else{
        header('Location: http://localhost/ISC/public/loginadmin');
        exit;
      }
    }
    public function category(){
      if($_SESSION['login'] == 'admin'){
        $data['judul'] = 'Category Dashboard';
        $data['aktif'] = 'category';
        $data['kategori'] = $this->model('Category_model')->getAllCategory();
        $this->view('layouts/dashboard-header', $data);
        $this->view('includes/dashboard-sidebar', $data);
        $this->view('includes/dashboard-navbar', $data);
        $this->view('dashboard/category', $data);
        $this->view('layouts/dashboard-footer', $data);
      }else{
        header('Location: http://localhost/ISC/public/loginadmin');
        exit;
      }
    }
    public function destination(){
      if($_SESSION['login'] == 'admin'){
        $data['aktif'] = 'destination';
        $data['judul'] = 'Destination Dashboard';
        $data['gallery'] = $this->model('Destination_model')->getAllGaleryDestination();
        $data['kategori_destinasi']=$this->model('Destination_model')->getAllCategoryDestination();
        $data['destinasi'] = $this->model('Destination_model')->getAllDestination();
        $this->view('layouts/dashboard-header', $data);
        $this->view('includes/dashboard-sidebar', $data);
        $this->view('includes/dashboard-navbar', $data);
        $this->view('dashboard/destination', $data);
        $this->view('layouts/dashboard-footer', $data);
      }else{
        header('Location: http://localhost/ISC/public/loginadmin');
        exit;
      }
    }public function updatedestination($id = null){
      if($_SESSION['login'] == 'admin'){
        $data['aktif'] = 'destination';
        $data['judul'] = 'Update Destination';
        $data['destinasi'] = $this->model("Destination_model")->getDestinationbyId($id);
        $this->view('layouts/dashboard-header', $data);
        $this->view('includes/dashboard-sidebar', $data);
        $this->view('includes/dashboard-navbar', $data);
        $this->view('dashboard/destination/update', $data);
        $this->view('layouts/dashboard-footer', $data);
      }else{
        header('Location: http://localhost/ISC/public/loginadmin');
        exit;
      }
    }

    public function craft(){
      if($_SESSION['login'] == 'admin'){
        $data['aktif'] = 'craft';
        $data['judul'] = 'Craft Dashboard';
        $data['gallery'] = $this->model('Craft_model')->getAllGaleryCraft();
        $data['kategori_craft'] = $this->model('Craft_model')->getAllCategoryCraft();
        $data['kerajinan'] = $this->model('Craft_model')->getAllCraft();
        $this->view('layouts/dashboard-header', $data);
        $this->view('includes/dashboard-sidebar', $data);
        $this->view('includes/dashboard-navbar', $data);
        $this->view('dashboard/craft', $data);
        $this->view('layouts/dashboard-footer', $data);
      }else{
        header('Location: http://localhost/ISC/public/loginadmin');
        exit;
      }
    }
    
    public function culture(){
      if($_SESSION['login'] == 'admin'){
        $data['aktif'] = 'culture';
        $data['judul'] = 'Culture Dashboard';
        $data['gallery'] = $this->model('Culture_model')->getAllGaleryCulture();
        $data['budaya'] = $this->model('Culture_model')->getAllCulture();
        $this->view('layouts/dashboard-header', $data);
        $this->view('includes/dashboard-sidebar', $data);
        $this->view('includes/dashboard-navbar', $data);
        $this->view('dashboard/culture', $data);
        $this->view('layouts/dashboard-footer', $data);
      }else{
        header('Location: http://localhost/ISC/public/loginadmin');
        exit;
      }
    }
    
    public function editdestination(){
      if($_SESSION['login'] == 'admin'){
        $tabel = "destinasi";
        if($this->model('Destination_model')->edit($_POST, $tabel)){
          echo
          "<script>
            alert('Data Berhasil Diupdate');
            window.location='".BASEURL."/dashboard/destination';
          </script>";
        }else{
          echo
          "<script>
            alert('Data Gagal Diupdate');
            window.location='".BASEURL."/dashboard/destination';
          </script>";
        }
      }else{
        header('Location: http://localhost/ISC/public/loginadmin');
        exit;
      }
    }
    public function deletedestination($id=null){
      if($_SESSION['login'] == 'admin'){
        $tabel = "destinasi";
        if($this->model('Destination_model')->delete($id, $tabel)){
          echo
          "<script>
            alert('Gallery Destinasi Berhasil Dihapus');
            window.location='".BASEURL."/dashboard/destination';
          </script>";
        }else{
          echo
          "<script>
            alert('Gallery Destinasi Gagal Dihapus');
            window.location='".BASEURL."/dashboard/destination';
          </script>";
        }
      }else{
        header('Location: http://localhost/ISC/public/loginadmin');
        exit;
      }
    }
    public function deletecategorydestination($id=null){
      if($_SESSION['login'] == 'admin'){
        $tabel = "kategori_destinasi";
        if($this->model('Destination_model')->delete($id, $tabel)){
          echo
          "<script>
            alert('Data Berhasil Dihapus');
            window.location='".BASEURL."'/dashboard/destination';
          </script>";
        }else{
          echo
          "<script>
            alert('Data Gagal Dihapus');
            window.location='".BASEURL."/dashboard/destination';
          </script>";
        }
      }else{
        header('Location: http://localhost/ISC/public/loginadmin');
        exit;
      }
    }
    public function deletegallerydestination($id = null){
      if($_SESSION['login'] == 'admin'){
        $tabel = "gallery_destination";
        if($this->model('Destination_model')->delete($id, $tabel)){
          echo
          "<script>
            alert('Data Berhasil Dihapus');
            window.location='".BASEURL."/dashboard/destination';
          </script>";
        }else{
          echo
          "<script>
            alert('Data Gagal Dihapus');
            window.location='".BASEURL."/dashboard/destination';
          </script>";
        }
      }else{
        header('Location: http://localhost/ISC/public/loginadmin');
        exit;
      }
    }
    public function deletecraft($id=null){
      if($_SESSION['login'] == 'admin'){
        $tabel = "kerajinan";
        if($this->model('Craft_model')->delete($id, $tabel)){
          echo
          "<script>
            alert('Data Berhasil Dihapus');
            window.location='".BASEURL."'/dashboard/craft';
          </script>";
        }else{
          echo
          "<script>
            alert('Data Gagal Dihapus');
            window.location='".BASEURL."/dashboard/craft';
          </script>";
        }
      }else{
        header('Location: http://localhost/ISC/public/loginadmin');
        exit;
      }
    }
    public function deletecategorycraft($id=null){
      if($_SESSION['login'] == 'admin'){
        $tabel = "kategori_kerajinan";
        if($this->model('Craft_model')->delete($id, $tabel)){
          echo
          "<script>
            alert('Data Berhasil Dihapus');
            window.location='".BASEURL."'/dashboard/craft';
          </script>";
        }else{
          echo
          "<script>
            alert('Data Gagal Dihapus');
            window.location='".BASEURL."/dashboard/craft';
          </script>";
        }
      }else{
        header('Location: http://localhost/ISC/public/loginadmin');
        exit;
      }
    }
    public function deletegallerycraft($id = null){
      if($_SESSION['login'] == 'admin'){
        $tabel = "gallery_kerajinan";
        if($this->model('Craft_model')->delete($id, $tabel)){
          echo
          "<script>
            alert('Data Berhasil Dihapus');
            window.location='".BASEURL."/dashboard/craft';
          </script>";
        }else{
          echo
          "<script>
            alert('Data Gagal Dihapus');
            window.location='".BASEURL."/dashboard/craft';
          </script>";
        }
      }else{
        header('Location: http://localhost/ISC/public/loginadmin');
        exit;
      }
    }
  }
?>
