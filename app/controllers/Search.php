<?php 
  class Search extends Controller{
    public function index(){
      $this->model('Sortby_model')->setvar();
      $data['judul'] = 'Search';
      $data['aktif'] = 'search';
      if(!is_null($_SESSION['id_user'])){
        $data['qty'] = count($this->model('Cart_model')->getAllCartUser($_SESSION['id_user']));
      }else{
        $data['qty'] = null;
      }
      if(isset($_SESSION['login'])){
        $data['email'] = $_SESSION['email'];
        $data['user']= $this->model('User_model')->dataUser($_SESSION['email']);
        $data['admin']= $this->model('Admin_model')->dataAdmin($_SESSION['email']);
      }else{
        $_SESSION['id_user'] = null;
      }
      $this->model('Language_model')->changeLanguage();
      $this->view('layouts/header', $data);
      $this->view('includes/navbar-general');
      $this->view('includes/navbar', $data);
      $this->view('search/index', $data);
      $this->view('includes/footer');
      $this->view('layouts/footer');
    }
  }
?>
