<?php

class Account_model {
  private $db;
  public function __construct()
  {
    $this->db = new Database();
  }
  public function changeprofile($data){
    $query = "UPDATE user SET nama_lengkap=:nama_lengkap, 
    username=:username, email=:email, nomor_hp=:nomor_hp, 
    tanggal_lahir=:tanggal_lahir, jenis_kelamin=:jenis_kelamin, 
    alamat=:alamat, profesi=:profesi WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('nama_lengkap', $data['nama_lengkap']);
    $this->db->bind('username', $data['username']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('nomor_hp', $data['nomor_hp']);
    $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
    $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
    $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
    $this->db->bind('alamat', $data['alamat']);
    $this->db->bind('profesi', $data['profesi']);
    $this->db->execute();
    return $this->db->rowCount();
  }
  public function changephoto($data){
    $query = "UPDATE user SET foto=:foto WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('foto', $data['foto']);
    $this->db->execute();
    return $this->db->rowCount();
  }
}
