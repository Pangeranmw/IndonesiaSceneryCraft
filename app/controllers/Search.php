<?php 
  class Search extends Controller{
    public function index(){
      if(!empty($_POST['search']) || !empty($_SESSION['search'])){
        $data['judul'] = 'Search';
        $data['aktif'] = 'search';
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
        if(!empty($_POST['search'])) {
          $_SESSION['search'] = $_POST['search'];
          $data['destinasi'] = $this->model('Search_model')->searchdestinasi($_POST['search'], $_SESSION['lang']);
          $data['budaya'] = $this->model('Search_model')->searchculture($_POST['search'], $_SESSION['lang']);
          $data['kerajinan'] = $this->model('Search_model')->searchcraft($_POST['search'], $_SESSION['lang']);
        } else {
          $data['destinasi'] = $this->model('Search_model')->searchdestinasi($_SESSION['search'], $_SESSION['lang']);
          $data['budaya'] = $this->model('Search_model')->searchculture($_SESSION['search'], $_SESSION['lang']);
          $data['kerajinan'] = $this->model('Search_model')->searchcraft($_SESSION['search'], $_SESSION['lang']);
        }
        $this->model('Language_model')->changeLanguage();
        $this->view('layouts/header', $data);
        $this->view('includes/navbar-general');
        $this->view('includes/navbar', $data);
        $this->view('search/index', $data);
        $this->view('includes/footer');
        $this->view('layouts/footer');
      } else {
        header('Location: '. BASEURL .'/destination');
        exit;
      }
    }
  }
?>
