<?php 
  class Login extends Controller{
    public function index(){
      $this->model('Language_model')->changeLanguage();
        $data['judul'] = 'login';
        $this->view('layouts/dashboard-header', $data);
        $this->view('login/index', $data);
        $this->view('layouts/dashboard-footer', $data);
    }
    public function ceklogin(){
      $this->model('Language_model')->changeLanguage();
      $input_email = $_POST['input_email'];
      $input_password = $_POST['input_password'];
      $result = $this->model('User_model')->dataUser($input_email);
      if(!$result){
        echo
        "<script>
          alert('Email is Wrong');
          window.location='".BASEURL."/login';
        </script>";
      }else{
        if(password_verify($input_password, $result['password'])){
          $_SESSION['login'] = 'user';
          $_SESSION['username'] = $result['username'];
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
            window.location='".BASEURL."/login';
          </script>";
        }
      }
    }
  }
