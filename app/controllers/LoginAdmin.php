<?php 
  class LoginAdmin extends Controller{
    public function index(){
      $this->model('Language_model')->changeLanguage();
        $data['judul'] = 'login';
        $this->view('layouts/dashboard-header', $data);
        $this->view('loginadmin/index', $data);
        $this->view('layouts/dashboard-footer', $data);
    }
    public function ceklogin(){
      $this->model('Language_model')->changeLanguage();
      $input_email = $_POST['input_email'];
      $input_password = $_POST['input_password'];
      $result = $this->model('Admin_model')->dataAdmin($input_email);
      if(!$result){
        echo
        "<script>
          alert('Email is Wrong');
          window.location='".BASEURL."/loginadmin';
        </script>";
      }else{
        if(password_verify($input_password, $result['password'])){
          $_SESSION['login'] = 'admin';
          $_SESSION['username'] = $result['nama'];
          $_SESSION['email'] = $input_email;
          $_SESSION['id_user'] = $result['id'];
          echo
            "<script>
              window.location='".BASEURL."/home';
            </script>";
        }else{
          echo
          "<script>
            alert('Password is Wrong');
            window.location='".BASEURL."/loginadmin';
          </script>";
        }
      }
    }
  }
