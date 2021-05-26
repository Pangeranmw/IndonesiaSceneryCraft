<?php
class Admin_model {
  private $db;

  public function __construct(){
    $this->db = new Database();
  }
  public function dataAdmin($data){
    $query = ("SELECT * FROM admin WHERE email = :email");
    $this->db->query($query);
    $this->db->bind('email', $data['email']);
    return $this->db->singleSet();
  }
}
