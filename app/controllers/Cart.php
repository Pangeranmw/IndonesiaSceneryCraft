<?php 
  class Cart extends Controller{
    public function index(){
      $data['judul'] = 'Cart';
      $data['aktif'] = 'cart';
      $data['qty'] = 12;
      $this->view('layouts/header', $data);
      $this->view('includes/navbar-general');
      $this->view('includes/navbar', $data);
      $this->view('cart/index');
      $this->view('includes/footer');
      $this->view('layouts/footer');
    }
  }
?>
