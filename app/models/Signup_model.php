<?php

class Signup_model{
  private $db;

  public function __construct(){
    $this->db = new Database();
  }

  public function tambahUser($data){
      $query = "INSERT INTO user VALUES ('0', :nama_lengkap, :username, :email, :pass, :no_hp, :tanggal_lahir, :jenis_kelamin, :alamat)";
      $this->db->query($query);

      $this->db->bind('nama_lengkap', $data['nama_lengkap']);
      $this->db->bind('username', $data['username']);
      $this->db->bind('email', $data['email']);
      $this->db->bind('pass', $data['password']);
      $this->db->bind('no_hp', $data['nomor_hp']);
      $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
      $this->db->bind('jenis_kelamin', $data['jenisKelamin']);
      $this->db->bind('alamat', $data['alamat']);

      $this->db->execute();
      return $this->db->rowCount();
  }

  public function getDatabyEmail($data){
      $query = "SELECT * FROM user WHERE email= :email";
      $this->db->query($query);
      $this->db->bind('email', $data['email']);
      return $this->db->singleSet();
  }

}
