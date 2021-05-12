<?php 
  class Dashboard extends Controller{
    public function index(){
      $data['judul'] = 'Dashboard';
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/index', $data);
      $this->view('layouts/footer', $data);
    }
    public function signin(){
      $data['judul'] = 'Sign in Dashboard';
      $this->view('layouts/dashboard-header', $data);
      $this->view('dashboard/signin', $data);
      $this->view('layouts/footer', $data);
    }
    public function profile(){
      $data['judul'] = 'Profile Dashboard';
      $this->view('layouts/dashboard-header', $data);
      $this->view('dashboard/profile', $data);
      $this->view('layouts/footer', $data);
    }
    public function tables(){
      $data['judul'] = 'Table Dashboard';
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/tables', $data);
      $this->view('layouts/footer', $data);
    }
    public function billing(){
      $data['judul'] = 'Billing Dashboard';
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/billing', $data);
      $this->view('layouts/footer', $data);
    }
    public function signup(){
      $data['judul'] = 'Signup Dashboard';
      $this->view('layouts/dashboard-header', $data);
      $this->view('dashboard/signup', $data);
      $this->view('layouts/footer', $data);
    }
  }
?>
