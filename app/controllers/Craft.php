<?php 
  class Craft extends Controller{
    public function index(){
      $this->model('Sortby_model')->setvar();
      $this->model('Language_model')->changeLanguage();
      if(isset($_POST['lokasi'])){
        $data['label'] = $this->model('Destination_model')->getnamakabupaten(implode(', ',$_POST['lokasi']));
        $data['craft'] = $this->model('Craft_model')->getAllCraftConditionLocation(implode(', ',$_POST['lokasi']));
      }else if(isset($_POST['kategori'])){
        $data['craft'] = $this->model('Craft_model')->getAllCraftConditionCategory(implode(', ',$_POST['kategori']));
        $data['label_kategori'] = $this->model('Destination_model')->selectkategori(implode(', ',$_POST['kategori']));
      }else{
        $data['craft'] = $this->model('Sortby_model')->sortbycraft();
      }
      if(isset($_SESSION['login'])){
        $data['email'] = $_SESSION['email'];
        $data['user']= $this->model('User_model')->dataUser($_SESSION['email']);
        $data['admin']= $this->model('Admin_model')->dataAdmin($_SESSION['email']);
      }else{
        $_SESSION['id_user'] = null;
      }
      $data['judul'] = 'Craft';
      $data['aktif'] = 'craft';
      if(!is_null($_SESSION['id_user'])){
        $data['qty'] = count($this->model('Cart_model')->getAllCartUser($_SESSION['id_user']));
      }else{
        $data['qty'] = 0;
      }
      foreach(range('A', 'Z') as $alfabet){
        $data[$alfabet] = $this->model('Wilayah_model')->ambilnamakabupaten($alfabet);
      }
      $data['kategori'] = $this->model('Craft_model')->getAllCategoryCraftgroupby();
      $data['daerah'] = $this->model('Craft_model')->getAllcraft();
      $this->view('layouts/header', $data);
      $this->view('includes/navbar-general');
      $this->view('includes/navbar', $data);
      $this->view('craft/index', $data);
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
      $data['judul'] = 'Craft';
      $data['aktif'] = 'craft';
      if(!is_null($_SESSION['id_user'])){
        $data['qty'] = count($this->model('Cart_model')->getAllCartUser($_SESSION['id_user']));
      }else{
        $data['qty'] = 0;
      }
      $data['review'] = $this->model('review_model')->getreviewbyidcraft($id);
      $data['craft'] = $this->model('Craft_model')->getAllCraftById($id);
      $data['gallery'] = $this->model('Craft_model')->getCraftGallerybyId($id);
      $this->view('layouts/header', $data);
      $this->view('includes/navbar-general');
      $this->view('includes/navbar', $data);
      $this->view('craft/detail', $data);
      $this->view('includes/footer');
      $this->view('layouts/footer');
    }
  }
?>
