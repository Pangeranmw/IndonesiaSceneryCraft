<?php 
  class Cart extends Controller{
    public function index(){
      $this->model('Language_model')->changeLanguage();
      if(is_null($_SESSION['id_user'])){
        echo
        "<script>
          alert('Please Login first');
          if(confirm('Want to Login?')){
            window.location='".BASEURL."/login';
          }else{
            window.location='".BASEURL."/home';
          }
          
        </script>";
      }
      if(isset($_SESSION['login'])){
        $data['email'] = $_SESSION['email'];
        $data['user']= $this->model('User_model')->dataUser($_SESSION['email']);
        $data['admin']= $this->model('Admin_model')->dataAdmin($_SESSION['email']);
      }else{
        $_SESSION['id_user'] = null;
      }
      $data['judul'] = 'Cart';
      $data['aktif'] = 'cart';
      $data['qty'] = count($this->model('Cart_model')->getAllCartUser($_SESSION['id_user']));
      $data['cart'] = $this->model('Cart_model')->getAllCartUser($_SESSION['id_user']);
      $data['wilayah'] = $this->model("Wilayah_model")->add_ajax_prov();
      $this->view('layouts/header', $data);
      $this->view('includes/navbar-general');
      $this->view('includes/navbar', $data);
      $this->view('cart/index', $data);
      $this->view('includes/footer');
      $this->view('layouts/footer');
    }
    public function add_ajax_kab($id_prov){
      $this->model("Wilayah_model")->add_ajax_kab($id_prov);
    }
    public function add_ajax_kec($id_kab){
      $this->model("Wilayah_model")->add_ajax_kec($id_kab);
    }
    public function add_ajax_des($id_kec){
      $this->model("Wilayah_model")->add_ajax_des($id_kec);
    }
    public function tambah($id){
      $data['id_kerajinan'] = $id;
      if(!empty($_POST['quantity'])){
        $data['jumlah'] = $_POST['quantity'];
      }else{
        $data['jumlah'] = 1;
      }
      $data['id_user'] = $_SESSION['id_user'];
      if($this->model('Cart_model')->tambah($data)>0){
        echo
        "<script>
          window.location='".BASEURL."/cart';
        </script>";
      }else{
        echo
        "<script>
          window.location='".BASEURL."/cart';
        </script>";
      }
    }public function remove($id){
      $this->model('Language_model')->changeLanguage();
      $tabel = "keranjang";
      if($this->model('Cart_model')->delete($id, $tabel)>0){
        echo
        "<script>
          window.location='".BASEURL."/cart';
        </script>";
      }else{
        echo
        "<script>
          window.location='".BASEURL."/cart';
        </script>";
      }
    }
  }
?>
