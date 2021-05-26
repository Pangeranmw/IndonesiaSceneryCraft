<?php 
  class LoginAdmin extends Controller{
    public function index(){
        $data['judul'] = 'login';
        $this->view('layouts/dashboard-header', $data);
        $this->view('loginadmin/index', $data);
        $this->view('layouts/dashboard-footer', $data);
    }
    public function ceklogin(){
      $input_email = $_POST['input_email'];
      $input_password = $_POST['input_password'];
      $result = $this->model('Login_model')->cekAdmin($_POST);
      if(!$result){
        echo
        "<script>
          confirm('Email is Wrong');
          window.location='".BASEURL."/loginadmin';
        </script>";
      }else{
        if(password_verify($input_password, $result['password'])){
          $_SESSION['login'] = 'admin';
          $_SESSION['email'] = $input_email;
          echo
            "<script>
              confirm('Login berhasil');
              window.location='".BASEURL."/home';
            </script>";
        }else{
          echo
          "<script>
            confirm('Password is Wrong');
            window.location='".BASEURL."/loginadmin';
          </script>";
        }
      }
    }
  }
