<?php 
  class Account extends Controller{
    public function index(){
      $this->model('Language_model')->changeLanguage();
      $data['aktif'] = 'account';
      $data['judul'] = 'Account Dashboard';
      $this->view('layouts/account-header', $data);
      $this->view('includes/account-sidebar', $data);
      $this->view('includes/account-navbar', $data);
      $this->view('account/index', $data);
      $this->view('layouts/account-footer', $data);
    }

    public function profile(){
      $this->model('Language_model')->changeLanguage();
      $data['aktif'] = 'profile';
      $data['judul'] = 'Profile Dashboard';
      $this->view('layouts/account-header', $data);
      $this->view('account/profile', $data);
      $this->view('layouts/account-footer', $data);
    }
  }
?>
