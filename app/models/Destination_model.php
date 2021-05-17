<?php

class Destination_model {
  private $dbh; //database handler
  private $stmt; //database handler

  public function __construct()
  {
    // data source name
    $dsn = 'mysql:host=localhost;dbname=isc';

    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch(PDOException $e){
      die($e->getMessage());
    }
  }
  public function getAllDestinasi(){
    $this->stmt = $this->dbh->prepare('SELECT * FROM destinasi');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
