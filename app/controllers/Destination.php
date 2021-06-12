<?php 
  class Destination extends Controller{
    public function index(){
      $this->model('Sortby_model')->setvar();
      if(isset($_POST['lokasi'])){
        // var_dump($_POST['lokasi']);
        $data['label'] = $this->model('Destination_model')->getnamakabupaten(implode(', ',$_POST['lokasi']));
        $data['destination'] = $this->model('Destination_model')->getAllDestinationConditionLocation(implode(', ',$_POST['lokasi']));
      }else if(isset($_POST['kategori'])){
        // var_dump($_POST['kategori']);
        $data['destination'] = $this->model('Destination_model')->getAllDestinationConditionCategory(implode(', ',$_POST['kategori']));
        $data['label_kategori'] = $this->model('Destination_model')->selectkategori(implode(', ',$_POST['kategori']));
      }else{
        $data['destination'] = $this->model('Sortby_model')->sortby();
      }
      $data['judul'] = 'Destination';
      $data['aktif'] = 'destination';
      if(!is_null($_SESSION['id_user'])){
        $data['qty'] = count($this->model('Cart_model')->getAllCartUser($_SESSION['id_user']));
      }else{
        $data['qty'] = 0;
      }
      if(isset($_SESSION['login'])){
        $data['email'] = $_SESSION['email'];
        $data['user']= $this->model('User_model')->dataUser($_SESSION['email']);
        $data['admin']= $this->model('Admin_model')->dataAdmin($_SESSION['email']);
      }else{
        $_SESSION['id_user'] = null;
      }
      foreach(range('A', 'Z') as $alfabet){
        $data[$alfabet] = $this->model('Wilayah_model')->ambilnamakabupaten($alfabet);
      }
      $this->model('Language_model')->changeLanguage();
      $data['kategori'] = $this->model('Destination_model')->getAllCategoryDestinationgroupby();
      $data['daerah'] = $this->model('Destination_model')->getAlldatadestinastion();
      $this->view('layouts/header', $data);
      $this->view('includes/navbar-general');
      $this->view('includes/navbar', $data);
      $this->view('destination/index', $data);
      $this->view('includes/footer');
      $this->view('layouts/footer');
    }
    public function detail($id){
      $this->model('Language_model')->changeLanguage();
      if(isset($_SESSION['login'])){
        $data['email'] = $_SESSION['email'];
        $data['user']= $this->model('User_model')->dataUser($_SESSION['email']);
        $data['admin']= $this->model('Admin_model')->dataAdmin($_SESSION['email']);
      }else{
        $_SESSION['id_user'] = null;
      }
      $data['judul'] = 'Destination';
      $data['aktif'] = 'destination';
      if(!is_null($_SESSION['id_user'])){
        $data['qty'] = count($this->model('Cart_model')->getAllCartUser($_SESSION['id_user']));
      }else{
        $data['qty'] = 0;
      }
      $data['review'] = $this->model('review_model')->getreviewbyiddestinasi($id);
      $data['destination'] = $this->model('Destination_model')->getDestinationbyId($id);
      $data['gallery'] = $this->model('Destination_model')->getDestinationGallerybyId($id);
      $this->view('layouts/header', $data);
      $this->view('includes/navbar-general', $data);
      $this->view('includes/navbar', $data);
      $this->view('destination/detail', $data);
      $this->view('includes/footer');
      $this->view('layouts/footer');
    }
  }
?>
