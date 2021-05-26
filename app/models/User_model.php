<?php
class User_model {
  private $db;

  public function __construct(){
    $this->db = new Database();
  }
  public function dataUser($data){
    $query = ("SELECT * FROM user WHERE email = :email");
    $this->db->query($query);
    $this->db->bind('email', $data['email']);
    return $this->db->singleSet();
  }
}
