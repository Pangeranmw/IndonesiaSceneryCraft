<?php

class Login_model{
  private $db;

  public function __construct(){
    $this->db = new Database();
  }

  public function ceklogin($data){
      $query = "SELECT * FROM user WHERE email= :email";
      $this->db->query($query);
      $this->db->bind('email', $data['input_email']);
      return $this->db->singleSet();
  }
  public function cekAdmin($data){
      $query = "SELECT * FROM admin WHERE email= :email";
      $this->db->query($query);
      $this->db->bind('email', $data['input_email']);
      return $this->db->singleSet();
  }
}
