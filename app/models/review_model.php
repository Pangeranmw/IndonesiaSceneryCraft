<?php

class Review_model {
  private $db;
  private $table = 'review';

  public function __construct()
  {
    $this->db = new Database();
  }public function selectbestreview(){
    $this->db->query('SELECT review.review as review, 
    review.judul as judul, 
    review.foto as gallery, 
    destinasi.nama_id as nama_id, 
    destinasi.nama_en as nama_en, 
    review.rating as rating, 
    gallery_destination.foto as gallerydestinasi, 
    user.nama_lengkap as nama_lengkap,
    user.profesi as profesi,
    user.foto as foto
    FROM review JOIN user ON review.id_user = user.id 
    JOIN destinasi ON destinasi.id = review.id_destinasi 
    JOIN gallery_destination ON destinasi.id = gallery_destination.id_destination 
    WHERE review.rating = 5
    ORDER BY LENGTH(review.review) DESC, destinasi.rating DESC LIMIT 1
    ');
    return $this->db->singleSet();


  }public function getreviewbyiddestinasi($id){
    $this->db->query('SELECT review.review as review,
    review.judul as judul,
    review.rating as rating,
    review.foto as gallery,
    user.nama_lengkap as nama_lengkap
    FROM review 
    JOIN user ON review.id_user= user.id
    WHERE id_destinasi =:id_destination');
    $this->db->bind('id_destination',$id);
    return $this->db->allSet();
  }public function getreviewbyidculture($id){
    $this->db->query('SELECT review.review as review,
    review.rating as rating,
    review.judul as judul,
    review.foto as gallery,
    user.nama_lengkap as nama_lengkap
    FROM review 
    JOIN user ON review.id_user= user.id
    WHERE id_budaya = :id_budaya');
    $this->db->bind('id_budaya',$id);
    return $this->db->allSet();
  }public function getreviewbyidcraft($id){
    $this->db->query('SELECT review.review as review,
    review.rating as rating,
    review.judul as judul,
    review.foto as gallery,
    user.nama_lengkap as nama_lengkap
    FROM review 
    JOIN user ON review.id_user= user.id
    WHERE id_kerajinan = :id_kerajinan');
    $this->db->bind('id_kerajinan',$id);
    return $this->db->allSet();
  }
  
  public function tampil($id){
    $this->db->query("SELECT * FROM review WHERE id_destinasi = :id");
    $this->db->bind('id', $id);
    return $this->db->singleSet();
  }

  public function tambahreviewdestinasi($id_user,$id_destinasi,$review, $foto, $judul, $rating){
    $this->db->query("INSERT INTO review VALUES('0', :id_user, NULL, :review, :rating, :foto, :id_destinasi, NULL, :judul)");
    $this->db->bind('id_user', $id_user);
    $this->db->bind('review', $review);
    $this->db->bind('foto', $foto);
    $this->db->bind('rating', $rating);
    $this->db->bind('rating', $rating);
    $this->db->bind('judul', $judul);
    $this->db->bind('id_destinasi', $id_destinasi);
    $this->db->execute();
    return $this->db->rowCount();
  }public function tambahreviewculture($id_user,$id_culture,$review, $foto, $judul, $rating){
    $this->db->query("INSERT INTO review VALUES('0', :id_user, NULL, :review, :rating, :foto, NULL, :id_budaya, :judul)");
    $this->db->bind('id_user', $id_user);
    $this->db->bind('review', $review);
    $this->db->bind('foto', $foto);
    $this->db->bind('rating', $rating);
    $this->db->bind('judul', $judul);
    $this->db->bind('id_budaya', $id_culture);
    $this->db->execute();
    return $this->db->rowCount();
  }public function tambahreviewcraft($id_user,$id_craft,$review, $foto, $judul, $rating){
    $this->db->query("INSERT INTO review VALUES('0', :id_user, :id_craft, :review, :rating, :foto, NULL, NULL, :judul)");
    $this->db->bind('id_user', $id_user);
    $this->db->bind('review', $review);
    $this->db->bind('foto', $foto);
    $this->db->bind('judul', $judul);
    $this->db->bind('rating', $rating);
    $this->db->bind('id_craft', $id_craft);
    $this->db->execute();
    return $this->db->rowCount();
  }
  
  public function selectratingdestinasi($id){
    $this->db->query("SELECT AVG(rating) as rating FROM review WHERE id_destinasi = :id");
    $this->db->bind('id', $id);
    return $this->db->singleSet();
  }public function selectratingculture($id){
    $this->db->query("SELECT AVG(rating) as rating FROM review WHERE id_budaya = :id");
    $this->db->bind('id', $id);
    return $this->db->singleSet();
  }public function selectratingcraft($id){
    $this->db->query("SELECT AVG(rating) as rating FROM review WHERE id_kerajinan = :id");
    $this->db->bind('id', $id);
    return $this->db->singleSet();
  }
  
  public function updateratingreview($rating, $id){
    $this->db->query("UPDATE destinasi SET rating = :rating WHERE id = :id");
    $this->db->bind('rating', $rating);
    $this->db->bind('id', $id);
    $this->db->execute();
    return $this->db->rowCount();
  }public function updateratingreviewcraft($rating, $id){
    $this->db->query("UPDATE kerajinan SET rating = :rating WHERE id = :id");
    $this->db->bind('rating', $rating);
    $this->db->bind('id', $id);
    $this->db->execute();
    return $this->db->rowCount();
  }public function updateratingreviewculture($rating, $id){
    $this->db->query("UPDATE budaya SET rating = :rating WHERE id = :id");
    $this->db->bind('rating', $rating);
    $this->db->bind('id', $id);
    $this->db->execute();
    return $this->db->rowCount();
  }
}
