<?php
class Session_model {
  private $db;

  public function __construct(){
    $this->db = new Database();
  }
  public function setSession(){
    if(isset($_SESSION['login'])){
      $data['email'] = $_SESSION['email'];
      // $data['user']= $this->model('User_model')->dataUser($data);
      // $data['admin']= $this->model('Admin_model')->dataAdmin($data);
    }
  }
}
