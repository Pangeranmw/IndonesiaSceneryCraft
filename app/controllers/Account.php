<?php 
  class Account extends Controller{
    public function index(){
      $data['judul'] = 'Account';
      $data['aktif'] = 'account';
      $data['qty'] = 12;
      $this->view('layouts/header', $data);
      $this->view('includes/navbar-general');
      $this->view('includes/navbar', $data);
      $this->view('account/index');
      $this->view('includes/footer');
      $this->view('layouts/footer');
    }
    public function detail(){
      $data['judul'] = 'Account';
      $data['aktif'] = 'account';
      $data['qty'] = 12;
      $this->view('layouts/header', $data);
      $this->view('includes/navbar-general');
      $this->view('includes/navbar', $data);
      $this->view('account/detail');
      $this->view('includes/footer');
      $this->view('layouts/footer');
    }
  }
?>
