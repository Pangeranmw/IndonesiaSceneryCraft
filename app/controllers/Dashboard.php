<?php 
  class Dashboard extends Controller{
    public function index(){
      $data['aktif'] = 'destination';
      $data['judul'] = 'Destination Dashboard';
      $data['destinasi'] = $this->model('Destination_model')->getAllDestination();
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/destination', $data);
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
    }public function addcategory(){
      $data['aktif'] = 'category';
      $data['judul'] = 'Add Category';
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/category/create', $data);
      $this->view('layouts/dashboard-footer', $data);
    }public function updatecategory(){
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
      $data['destinasi'] = $this->model('Destination_model')->getAllDestination();
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/destination', $data);
      $this->view('layouts/dashboard-footer', $data);
    }public function updatedestination(){
      $data['aktif'] = 'destination';
      $data['judul'] = 'Update Destination';
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/destination/update', $data);
      $this->view('layouts/dashboard-footer', $data);
    }public function addgallerydestination(){
      $data['aktif'] = 'destination';
      $data['judul'] = 'Add Gallery Destination';
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/destination/addgallery', $data);
      $this->view('layouts/dashboard-footer', $data);
    }public function addcategorydestination(){
      $data['aktif'] = 'destination';
      $data['judul'] = 'Add Category Destination';
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/destination/addcategory', $data);
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
    }public function addcraft(){
      $data['aktif'] = 'craft';
      $data['judul'] = 'Add Craft';
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/craft/create', $data);
      $this->view('layouts/dashboard-footer', $data);
    }public function updatecraft(){
      $data['aktif'] = 'craft';
      $data['judul'] = 'Update Craft';
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/craft/update', $data);
      $this->view('layouts/dashboard-footer', $data);
    }public function addgallerycraft(){
      $data['aktif'] = 'craft';
      $data['judul'] = 'Add Gallery Craft';
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/craft/addgallery', $data);
      $this->view('layouts/dashboard-footer', $data);
    }public function addcategorycraft(){
      $data['aktif'] = 'craft';
      $data['judul'] = 'Add Category Craft';
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/craft/addcategory', $data);
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
    }public function addculture(){
      $data['aktif'] = 'culture';
      $data['judul'] = 'Add Culture';
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/culture/create', $data);
      $this->view('layouts/dashboard-footer', $data);
    }public function updateculture(){
      $data['aktif'] = 'culture';
      $data['judul'] = 'Update Culture';
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/culture/update', $data);
      $this->view('layouts/dashboard-footer', $data);
    }public function addgalleryculture(){
      $data['aktif'] = 'culture';
      $data['judul'] = 'Add Gallery Culture';
      $this->view('layouts/dashboard-header', $data);
      $this->view('includes/dashboard-sidebar', $data);
      $this->view('includes/dashboard-navbar', $data);
      $this->view('dashboard/culture/addgallery', $data);
      $this->view('layouts/dashboard-footer', $data);
    }
  }
?>
