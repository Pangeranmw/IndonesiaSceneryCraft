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
    public function profile(){
      $data['aktif'] = 'profile';
      $data['judul'] = 'Profile Dashboard';
      $this->view('layouts/dashboard-header', $data);
      $this->view('dashboard/profile', $data);
      $this->view('layouts/dashboard-footer', $data);
    }
    public function category(){
      $data['judul'] = 'Category Dashboard';
      $data['aktif'] = 'category';
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/category', $data);
      $this->view('layouts/dashboard-footer', $data);
    }
    public function addcategory(){
      $data['aktif'] = 'category';
      $data['judul'] = 'Add Category';
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/category/create', $data);
      $this->view('layouts/dashboard-footer', $data);
    }
    public function updatecategory(){
      $data['aktif'] = 'category';
      $data['judul'] = 'Update Category';
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/category/update', $data);
      $this->view('layouts/dashboard-footer', $data);
    }
    public function destination(){
      $data['aktif'] = 'destination';
      $data['judul'] = 'Destination Dashboard';
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/destination', $data);
      $this->view('layouts/dashboard-footer', $data);
    }
    public function culture(){
      $data['aktif'] = 'culture';
      $data['judul'] = 'Culture Dashboard';
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/culture', $data);
      $this->view('layouts/dashboard-footer', $data);
    }
    public function craft(){
      $data['aktif'] = 'craft';
      $data['judul'] = 'Craft Dashboard';
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/craft', $data);
      $this->view('layouts/dashboard-footer', $data);
    }
    public function user(){
      $data['aktif'] = 'user';
      $data['judul'] = 'User Dashboard';
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/user', $data);
      $this->view('layouts/dashboard-footer', $data);
    }
  }
?>
