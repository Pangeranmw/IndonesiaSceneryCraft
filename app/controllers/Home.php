<?php 
  class Home extends Controller{
    public function index(){
      $data['judul'] = 'Home';
      // $data['destinasi'] = $this->model('Destination_model')->getDestination();
      $this->view('layouts/header', $data);
      $this->view('includes/navbar-home');
      $this->view('includes/navbar');
      $this->view('home/index');
      $this->view('includes/footer');
      $this->view('layouts/footer');
    }
    public function login(){
      $data['aktif'] = 'login';
      $this->view('layouts/dashboard-header', $data);
      $this->view('home/login', $data);
      $this->view('layouts/dashboard-footer', $data);
    }
    public function signup(){
      $data['aktif'] = 'signup';
      $data['judul'] = 'Signup Dashboard';
      $this->view('layouts/dashboard-header', $data);
      $this->view('home/signup', $data);
      $this->view('layouts/dashboard-footer', $data);
    }
  }
?>
