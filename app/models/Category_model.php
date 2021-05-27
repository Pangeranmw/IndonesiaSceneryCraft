<?php

class Category_model {
  private $db;
  public function __construct()
  {
    $this->db = new Database();
  }
  public function getAllCategory(){
    $this->db->query('SELECT * FROM kategori');
    return $this->db->allSet();
  }
  public function tambahkategori($data){
    $query = "INSERT INTO kategori VALUES ('0', :kategori_id, :kategori_en)";
    $this->db->query($query);
    $this->db->bind('kategori_id', $data['kategori_id']);
    $this->db->bind('kategori_en', $data['kategori_en']);
    $this->db->execute();
    return $this->db->rowCount();
  }
  public function delete($id, $table){
    $query = "DELETE FROM ". $table ." WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id',$id);
    $this->db->execute();
    return $this->db->rowCount();
  }
  public function getAllCategoryById($id){
    $this->db->query(
      "SELECT * FROM kategori WHERE id=$id");
    // $this->db->bind('kategori.id',$id);
    return $this->db->singleSet();
  }
  public function edit($data, $table){
    $query = "UPDATE ". $table .
             " SET id=:id, kategori_id=:kategori_id, kategori_en=:kategori_en
              WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('kategori_id', $data['kategori_id']);
    $this->db->bind('kategori_en', $data['kategori_en']);
    $this->db->execute();
    return $this->db->rowCount();
  }
}
