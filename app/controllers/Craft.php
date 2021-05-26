<?php 
  class Craft extends Controller{
    public function index(){
      if(isset($_SESSION['login'])){
        $data['email'] = $_SESSION['email'];
        $data['user']= $this->model('User_model')->dataUser($data);
        $data['admin']= $this->model('Admin_model')->dataAdmin($data);
      }
      $data['judul'] = 'Craft';
      $data['aktif'] = 'craft';
      $data['qty'] = 12;
      $this->view('layouts/header', $data);
      $this->view('includes/navbar-general');
      $this->view('includes/navbar', $data);
      $this->view('craft/index');
      $this->view('includes/footer');
      $this->view('layouts/footer');
    }
    public function detail(){
      if(isset($_SESSION['login'])){
        $data['email'] = $_SESSION['email'];
        $data['user']= $this->model('User_model')->dataUser($data);
        $data['admin']= $this->model('Admin_model')->dataAdmin($data);
      }
      $data['judul'] = 'Craft';
      $data['aktif'] = 'craft';
      $data['qty'] = 12;
      $this->view('layouts/header', $data);
      $this->view('includes/navbar-general');
      $this->view('includes/navbar', $data);
      $this->view('craft/detail');
      $this->view('includes/footer');
      $this->view('layouts/footer');
    }
  }
?>
