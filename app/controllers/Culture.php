<?php 
  class Culture extends Controller{
    public function index(){
      $data['judul'] = 'Culture';
      $data['aktif'] = 'culture';
      $data['qty'] = 12;
      $this->view('layouts/header', $data);
      $this->view('includes/navbar-general');
      $this->view('includes/navbar', $data);
      $this->view('culture/index');
      $this->view('includes/footer');
      $this->view('layouts/footer');
    }
    public function detail(){
      $data['judul'] = 'Culture';
      $data['aktif'] = 'culture';
      $data['qty'] = 12;
      $this->view('layouts/header', $data);
      $this->view('includes/navbar-general');
      $this->view('includes/navbar', $data);
      $this->view('culture/detail');
      $this->view('includes/footer');
      $this->view('layouts/footer');
    }
  }
?>
