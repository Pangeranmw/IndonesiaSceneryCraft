<?php 

class Signup extends Controller{
    public function index(){
      $this->model('Language_model')->changeLanguage();
        $data['judul'] = 'Signup';
        $this->view('layouts/dashboard-header', $data);
        $this->view('signup/index', $data);
        // $this->view('layouts/dashboard-footer', $data);
    }
    
    public function tambah(){
      $pass = $_POST['password'];
      $conpass = $_POST['confirmpassword'];
      $this->model('Language_model')->changeLanguage();
      //mengecekkan email
      $result =  $this->model('Signup_model')->getDatabyEmail($_POST);
      if(!$result){
        //mengecek konfirmasi password
        if(strcmp($pass, $conpass)==0){
          $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
          if($this->model('Signup_model')->tambahUser($_POST)>0){
            echo
            "<script>
              alert('Registrasi berhasil');
              window.location='".BASEURL."/login';
            </script>";
          }else{
            echo
            "<script>
              alert('Registrasi Gagal');
              window.location='".BASEURL."/signup';
            </script>";
          }
        }else{
          echo
          "<script>
            alert('Confirm Password is Wrong');
            window.location='".BASEURL."/signup';
          </script>";
        }
      }else{
        echo
        "<script>
          alert('Email are Ready Use');
          window.location='".BASEURL."/signup';
        </script>";
      }
    }
}
