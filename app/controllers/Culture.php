<?php 
  class Culture extends Controller{
    public function index(){
      $this->model('Sortby_model')->setvar();
      $this->model('Language_model')->changeLanguage();
      if(isset($_SESSION['login'])){
        $data['email'] = $_SESSION['email'];
        $data['user']= $this->model('User_model')->dataUser($_SESSION['email']);
        $data['admin']= $this->model('Admin_model')->dataAdmin($_SESSION['email']);
      }else{
        $_SESSION['id_user'] = null;
      }
      if(!isset($_POST['lokasi'])){
        $data['label']= null;
        $data['culture'] = $this->model('Sortby_model')->sortbyculture();
      }else{
        var_dump($_POST['lokasi']);
        $data['label']= $this->model('Culture_model')->getnamaprovinsi(implode(', ',$_POST['lokasi']));
        $data['culture'] = $this->model('Culture_model')->getAlldataCulturecondisi(implode(', ',$_POST['lokasi']));
      }
      $data['judul'] = 'Culture';
      $data['aktif'] = 'culture';
      if(!is_null($_SESSION['id_user'])){
        $data['qty'] = count($this->model('Cart_model')->getAllCartUser($_SESSION['id_user']));
      }else{
        $data['qty'] = null;
      }
      $data['daerah'] = $this->model('Culture_model')->getallculturegruopbynama();
      $this->view('layouts/header', $data);
      $this->view('includes/navbar-general');
      $this->view('includes/navbar', $data);
      $this->view('culture/index', $data);
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
      $data['judul'] = 'Culture';
      $data['aktif'] = 'culture';
      if(!is_null($_SESSION['id_user'])){
        $data['qty'] = count($this->model('Cart_model')->getAllCartUser($_SESSION['id_user']));
      }else{
        $data['qty'] = null;
      }
      $data['review'] = $this->model('review_model')->getreviewbyidculture($id);
      $data['culture'] = $this->model('Culture_model')->getAllgaleryCultureById($id);
      $data['gallery'] = $this->model('Culture_model')->getCultureGallerybyId($id);
      $this->view('layouts/header', $data);
      $this->view('includes/navbar-general');
      $this->view('includes/navbar', $data);
      $this->view('culture/detail', $data);
      $this->view('includes/footer');
      $this->view('layouts/footer');
    }
  }
?>
