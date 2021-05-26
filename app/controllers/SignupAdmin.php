<?php 

class SignupAdmin extends Controller{
    public function index(){
      if($_SESSION['login'] == 'admin'){
        $data['judul'] = 'Signup Admin';
        $this->view('layouts/dashboard-header', $data);
        $this->view('signupadmin/index', $data);
        $this->view('layouts/dashboard-footer', $data);
      }else{
        header('Location: http://localhost/ISC/public/loginadmin');
        exit;
      }
    }
    
    public function tambah(){
      $pass = $_POST['password'];
      $conpass = $_POST['confirmpassword'];
      //mengecekkan email
      $result =  $this->model('Signup_model')->getAdminbyEmail($_POST);
      if(!$result){
        //mengecek konfirmasi password
        if(strcmp($pass, $conpass)==0){
          $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
          if($this->model('Signup_model')->tambahAdmin($_POST)>0){
            echo
            "<script>
              confirm('Admin Berhasil ditambahkan');
              window.location='".BASEURL."/loginadmin';
            </script>";
          }else{
            echo
            "<script>
              confirm('Admin Gagal ditambahkan');
              window.location='".BASEURL."/signupadmin';
            </script>";
          }
        }else{
          echo
          "<script>
            confirm('Confirm Password is Wrong');
            window.location='".BASEURL."/signupadmin';
          </script>";
        }
      }else{
        echo
        "<script>
          confirm('Email already use');
          window.location='".BASEURL."/signupadmin';
        </script>";
      }
    }
}
