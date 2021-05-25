<?php 

class Signup extends Controller{
    public function index(){
        $data['judul'] = 'Signup';
        $this->view('layouts/dashboard-header', $data);
        $this->view('signup/index', $data);
        $this->view('layouts/dashboard-footer', $data);
    }
    
    public function tambah(){
      $pass = $_POST['password'];
      $conpass = $_POST['confirmpassword'];
      //mengecekkan email
      $result =  $this->model('Signup_model')->getDatabyEmail($_POST);
      if(!$result){
        //mengecek konfirmasi password
        if(strcmp($pass, $conpass)==0){
          $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
          if($this->model('Signup_model')->tambahUser($_POST)>0){
            echo
            "<script>
              confirm('Registrasi berhasil');
              window.location='http://localhost/IndonesiaSceneryCraft/public/login';
            </script>";
          }else{
            echo
            "<script>
              confirm('Registrasi Gagal');
              window.location='http://localhost/IndonesiaSceneryCraft/public/signup';
            </script>";
          }
        }else{
          echo
          "<script>
            confirm('Confirm Password is Wrong');
            window.location='http://localhost/IndonesiaSceneryCraft/public/signup';
          </script>";
        }
      }else{
        echo
        "<script>
          confirm('Email are Ready Use');
          window.location='http://localhost/IndonesiaSceneryCraft/public/signup';
        </script>";
      }
    }
}
