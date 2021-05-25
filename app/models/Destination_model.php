<?php

class Destination_model {
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }
  public function tambahdestinasi($data){
    $query = "INSERT INTO destinasi VALUES ('0', :nama_id, :maps, :artikel_id, :rating, :artikel_en, :nama_en, :id_lokasi";
    $this->db->query($query);

    $this->db->bind('nama_id', $data['nama_id']);
    $this->db->bind('maps', $data['maps']);
    $this->db->bind('artikel_id', $data['artikel_id']);
    $this->db->bind('rating', 0);
    $this->db->bind('artikel_en', $data['artikel_en']);
    $this->db->bind('nama_en', $data['nama_en']);
    $this->db->bind('id_lokasi', $data['id_lokasi']);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
