<?php 
  class Home extends Controller{
    public function index(){
      $this->model('Language_model')->changeLanguage();
      $data['judul'] = 'Home';
      $data['aktif'] = 'home';
      if(isset($_SESSION['login'])){
        $data['email'] = $_SESSION['email'];
        $data['user']= $this->model('User_model')->dataUser($_SESSION['email']);
        $data['admin']= $this->model('Admin_model')->dataAdmin($_SESSION['email']);
      }else{
        $_SESSION['id_user'] = null;
      }
      if(!is_null($_SESSION['id_user'])){
        $data['qty'] = count($this->model('Cart_model')->getAllCartUser($_SESSION['id_user']));
      }else{
        $data['qty'] = null;
      }
      $data['culture'] = $this->model('Culture_model')->getAllGaleryCulture();
      $data['destination_gallery'] = $this->model('Destination_model')->getAllGaleryDestination();
      $data['destination'] = $this->model('Destination_model')->getAlldatadestinastionrekomendation();
      $data['craft'] = $this->model('Craft_model')->getAllGaleryCraft();
      $this->view('layouts/header', $data);
      $this->view('includes/navbar-home');
      $this->view('includes/navbar', $data);
      $this->view('home/index', $data);
      $this->view('includes/footer');
      $this->view('layouts/footer');
    }
  }
?>
