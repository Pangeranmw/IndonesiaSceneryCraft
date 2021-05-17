<?php 
  class Dashboard extends Controller{
    public function index(){
      $data['judul'] = 'Dashboard';
      $data['aktif'] = 'dashboard';
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/index', $data);
      $this->view('layouts/dashboard-footer', $data);
    }
    public function signin(){
      $data['aktif'] = 'signin';
      $data['judul'] = 'Sign in Dashboard';
      $this->view('layouts/dashboard-header', $data);
      $this->view('dashboard/signin', $data);
      $this->view('layouts/dashboard-footer', $data);
    }
    public function profile(){
      $data['aktif'] = 'profile';
      $data['judul'] = 'Profile Dashboard';
      $this->view('layouts/dashboard-header', $data);
      $this->view('dashboard/profile', $data);
      $this->view('layouts/dashboard-footer', $data);
    }
    public function tables(){
      $data['judul'] = 'Table Dashboard';
      $data['aktif'] = 'table';
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/tables', $data);
      $this->view('layouts/dashboard-footer', $data);
    }
    public function billing(){
      $data['aktif'] = 'billing';
      $data['judul'] = 'Billing Dashboard';
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/billing', $data);
      $this->view('layouts/dashboard-footer', $data);
    }
    public function signup(){
      $data['aktif'] = 'signup';
      $data['judul'] = 'Signup Dashboard';
      $this->view('layouts/dashboard-header', $data);
      $this->view('dashboard/signup', $data);
      $this->view('layouts/dashboard-footer', $data);
    }
  }
?>
