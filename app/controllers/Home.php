<?php 
  class Home extends Controller{
    public function index(){
      $data['judul'] = 'Home';
      $data['aktif'] = 'home';
      $data['qty'] = 12;
      if(isset($_SESSION['login'])){
        $data['email'] = $_SESSION['email'];
        $data['user']= $this->model('Home_model')->ambildata($data);
      }
      // $data['destinasi'] = $this->model('Destination_model')->getDestination();
      $this->view('layouts/header', $data);
      $this->view('includes/navbar-home');
      $this->view('includes/navbar', $data);
      $this->view('home/index');
      $this->view('includes/footer');
      $this->view('layouts/footer');
    }
  }
?>
