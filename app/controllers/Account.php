<?php 
  class Account extends Controller{
    public function index(){
      $this->model('Language_model')->changeLanguage();
      $data['user']= $this->model('User_model')->dataUser($_SESSION['email']);
      $data['aktif'] = 'account';
      $data['judul'] = 'Account Dashboard';
      $this->view('layouts/account-header', $data);
      $this->view('includes/account-sidebar', $data);
      $this->view('includes/account-navbar', $data);
      $this->view('account/index', $data);
      $this->view('layouts/account-footer', $data);
    }
    public function editphoto(){
      $data['user']= $this->model('User_model')->dataUser($_SESSION['email']);
      $this->model('Language_model')->changeLanguage();
      $data['aktif'] = 'account';
      $data['judul'] = 'Account Dashboard';
      $this->view('layouts/account-header', $data);
      $this->view('includes/account-sidebar', $data);
      $this->view('includes/account-navbar', $data);
      $this->view('account/editphoto', $data);
      $this->view('layouts/account-footer', $data);
    }
    public function editprofile(){
      $data['user']= $this->model('User_model')->dataUser($_SESSION['email']);
      $this->model('Language_model')->changeLanguage();
      $data['aktif'] = 'account';
      $data['judul'] = 'Account Dashboard';
      $this->view('layouts/account-header', $data);
      $this->view('includes/account-sidebar', $data);
      $this->view('includes/account-navbar', $data);
      $this->view('account/editprofile', $data);
      $this->view('layouts/account-footer', $data);
    }
    public function transaction(){
      $data['user']= $this->model('User_model')->dataUser($_SESSION['email']);
      $this->model('Language_model')->changeLanguage();
      $data['aktif'] = 'transaction';
      $data['judul'] = 'Account Dashboard';
      $this->view('layouts/account-header', $data);
      $this->view('includes/account-sidebar', $data);
      $this->view('includes/account-navbar', $data);
      $this->view('account/transaction', $data);
      $this->view('layouts/account-footer', $data);
    }
    public function profile(){
      $data['user']= $this->model('User_model')->dataUser($_SESSION['email']);
      $this->model('Language_model')->changeLanguage();
      $data['aktif'] = 'profile';
      $data['judul'] = 'Profile Dashboard';
      $this->view('layouts/account-header', $data);
      $this->view('account/profile', $data);
      $this->view('layouts/account-footer', $data);
    }
    public function changephoto(){
      $_POST['foto'] = $this->model('Upload_model')->upload($_FILES);
      if($this->model('Account_model')->changephoto($_POST)>0){
        echo
        "<script>
          alert('Photo Successfully Changed');
          window.location='".BASEURL."/account';
        </script>";
      }else{
        echo
        "<script>
          alert('Change Photo Failed');
          window.location='".BASEURL."/account/editphoto';
        </script>";
      }
    }
    public function changeprofile(){
      if($this->model('Account_model')->changeprofile($_POST)>0){
        echo
        "<script>
          alert('Profile Successfully Changed');
          window.location='".BASEURL."/account';
        </script>";
      }else{
        echo
        "<script>
          alert('Change Profile Failed');
          window.location='".BASEURL."/account/editprofile';
        </script>";
      }
    }
  }
?>
