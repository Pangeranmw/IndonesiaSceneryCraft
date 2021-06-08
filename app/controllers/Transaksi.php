<?php
 class Transaksi extends Controller{
     public function index(){
         if(empty($this->model('Cart_model')->getAllCartUser($_SESSION['id_user']))){
            echo
                "<script>
                    alert('Product not Available');
                    window.location='".BASEURL."/home';
                </script>";
         }else{
            $_POST['total'] = $_SESSION['total_transaksi'];
            $date = date('d-m-y h:i:s');
            $kerajinan = $this->model('Cart_model')->getAllCartUser($_SESSION['id_user']);
            if($this->model('Transaktion_model')->tambahtransaksi($_POST,$_SESSION['id_user'],$date)>0){
                foreach($kerajinan as $craft){
                    $this->model('Transaktion_model')->updatestokbyid($craft['id_kerajinan'], $craft['jumlah']);
                }
                if($this->model('Cart_model')->deletecartuser($_SESSION['id_user'])>0){
                    echo
                    "<script>
                        alert('Craft Successfully Purchased');
                        window.location='".BASEURL."/home';
                    </script>";
                }else{
                    echo
                    "<script>
                        alert('Craft failed to delete');
                        window.location='".BASEURL."/home';
                    </script>";
                }
            }else{
                echo
                "<script>
                    alert('Craft failed to buy');
                    window.location='".BASEURL."/home';
                </script>";
         }            
     }
    }
 }
