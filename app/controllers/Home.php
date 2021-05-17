<?php 
  class Home extends Controller{
    public function index(){
      $data['judul'] = 'Home';
      // $data['destinasi'] = $this->model('Destination_model')->getDestination();
      $this->view('layouts/header', $data);
      $this->view('includes/navbar');
      $this->view('home/index');
      $this->view('includes/footer');
      $this->view('layouts/footer');
    }
  }
?>
