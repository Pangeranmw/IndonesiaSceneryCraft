<?php 
  class Destination extends Controller{
    public function index(){
      $data['judul'] = 'Destination';
      $data['aktif'] = 'destination';
      $data['qty'] = 12;
      $this->view('layouts/header', $data);
      $this->view('includes/navbar-general');
      $this->view('includes/navbar', $data);
      $this->view('destination/index');
      $this->view('includes/footer');
      $this->view('layouts/footer');
    }
    public function detail(){
      $data['judul'] = 'Destination';
      $data['aktif'] = 'destination';
      $data['qty'] = 12;
      $this->view('layouts/header', $data);
      $this->view('includes/navbar-general');
      $this->view('includes/navbar', $data);
      $this->view('destination/detail');
      $this->view('includes/footer');
      $this->view('layouts/footer');
    }
  }
?>
