<?php
  Class Sortby_model{
    private $db;

    public function __construct()
    {
      $this->db = new Database();
    }public function setvar(){
      if(!isset($_SESSION['sortby']))
      {
        //If sortbyuage is not set in session then set default sortbyuage as English
        $_SESSION['sortby'] = 'MostRelevance';
      }
      else if (isset($_POST['sortby']) && $_SESSION['sortby'] != $_POST['sortby'] && !empty($_POST['sortby'])){
        if($_POST['sortby'] == 'MostRelevance'){
          $_SESSION['sortby'] = 'MostRelevance';
        }
        else if ($_POST['sortby'] == 'Recommended') {
          $_SESSION['sortby'] = 'Recommended';
        }else if ($_POST['sortby'] == 'LowestPrice'){
          $_SESSION['sortby'] = 'LowestPrice';
        }else if ($_POST['sortby'] == 'HighestPrice'){
          $_SESSION['sortby'] = 'HighestPrice';
        }
      }
    }
    public function sortby(){
        if( $_SESSION['sortby'] == 'MostRelevance' || $_SESSION['sortby'] == 'LowestPrice' || $_SESSION['sortby'] == 'HighestPrice'){
          $this->db->query(
            'SELECT DISTINCT kategori.kategori_id as kategori, destinasi.rating as rating, destinasi.id as id_destination, destinasi.nama_id AS nama_id, gallery_destination.foto as gallery, destinasi.nama_en AS nama_en, destinasi.artikel_id AS artikel_id, destinasi.artikel_en AS artikel_en, destinasi.maps AS maps, destinasi.rating AS rating, 
            desa.nama_desa AS nama_desa, kecamatan.nama_kecamatan AS nama_kecamatan, kabupaten.nama_kabupaten AS nama_kabupaten, provinsi.nama_provinsi AS nama_provinsi 
            FROM destinasi JOIN desa ON destinasi.id_lokasi = desa.id 
            JOIN kecamatan ON desa.district_id = kecamatan.id 
            JOIN kabupaten ON kecamatan.regency_id = kabupaten.id 
            JOIN provinsi ON kabupaten.province_id = provinsi.id
            JOIN gallery_destination ON gallery_destination.id_destination = destinasi.id
            JOIN kategori_destinasi ON destinasi.id = kategori_destinasi.id_destinasi
            JOIN kategori ON kategori.id = kategori_destinasi.id_kategori
            GROUP BY gallery_destination.id_destination
          ');
          return $this->db->allSet();
        }
        else if ( $_SESSION['sortby'] == 'Recommended') {
          $this->db->query(
            'SELECT DISTINCT kategori.kategori_id as kategori, destinasi.rating as rating, destinasi.id as id_destination, destinasi.nama_id AS nama_id, gallery_destination.foto as gallery, destinasi.nama_en AS nama_en, destinasi.artikel_id AS artikel_id, destinasi.artikel_en AS artikel_en, destinasi.maps AS maps, destinasi.rating AS rating, 
            desa.nama_desa AS nama_desa, kecamatan.nama_kecamatan AS nama_kecamatan, kabupaten.nama_kabupaten AS nama_kabupaten, provinsi.nama_provinsi AS nama_provinsi 
            FROM destinasi JOIN desa ON destinasi.id_lokasi = desa.id 
            JOIN kecamatan ON desa.district_id = kecamatan.id 
            JOIN kabupaten ON kecamatan.regency_id = kabupaten.id 
            JOIN provinsi ON kabupaten.province_id = provinsi.id
            JOIN gallery_destination ON gallery_destination.id_destination = destinasi.id
            JOIN kategori_destinasi ON destinasi.id = kategori_destinasi.id_destinasi
            JOIN kategori ON kategori.id = kategori_destinasi.id_kategori
            GROUP BY gallery_destination.id_destination
            ORDER BY destinasi.rating DESC
          ');
          return $this->db->allSet();
        }
    }
    public function sortbyculture(){
      if( $_SESSION['sortby'] == 'MostRelevance' || $_SESSION['sortby'] == 'LowestPrice' || $_SESSION['sortby'] == 'HighestPrice' ){
        $this->db->query(
          'SELECT gallery_budaya.foto as gallery, budaya.id AS id, budaya.nama_id AS nama_id, budaya.nama_en AS nama_en, budaya.artikel_id AS artikel_id, budaya.artikel_en AS artikel_en, budaya.maps AS maps, budaya.rating AS rating, 
          desa.nama_desa AS nama_desa, kecamatan.nama_kecamatan AS nama_kecamatan, kabupaten.nama_kabupaten AS nama_kabupaten, provinsi.nama_provinsi AS nama_provinsi 
          FROM budaya JOIN desa ON budaya.id_lokasi = desa.id 
          JOIN kecamatan ON desa.district_id = kecamatan.id 
          JOIN kabupaten ON kecamatan.regency_id = kabupaten.id 
          JOIN provinsi ON kabupaten.province_id = provinsi.id
          JOIN gallery_budaya ON gallery_budaya.id_budaya = budaya.id
          GROUP BY gallery_budaya.id_budaya
        ');
        return $this->db->allSet();
      }
      else if ( $_SESSION['sortby'] == 'Recommended') {
        $this->db->query(
          'SELECT gallery_budaya.foto as gallery, budaya.id AS id, budaya.nama_id AS nama_id, budaya.nama_en AS nama_en, budaya.artikel_id AS artikel_id, budaya.artikel_en AS artikel_en, budaya.maps AS maps, budaya.rating AS rating, 
          desa.nama_desa AS nama_desa, kecamatan.nama_kecamatan AS nama_kecamatan, kabupaten.nama_kabupaten AS nama_kabupaten, provinsi.nama_provinsi AS nama_provinsi 
          FROM budaya JOIN desa ON budaya.id_lokasi = desa.id 
          JOIN kecamatan ON desa.district_id = kecamatan.id 
          JOIN kabupaten ON kecamatan.regency_id = kabupaten.id 
          JOIN provinsi ON kabupaten.province_id = provinsi.id
          JOIN gallery_budaya ON gallery_budaya.id_budaya = budaya.id
          GROUP BY gallery_budaya.id_budaya
          ORDER BY budaya.rating DESC
        ');
        return $this->db->allSet();
      }
  }
    public function sortbycraft(){
      if( $_SESSION['sortby'] == 'MostRelevance'){
        $this->db->query(
          'SELECT kerajinan.id AS id_kerajinan, 
          gallery_kerajinan.foto AS gallery,
          kerajinan.nama_id AS nama_id, 
          kerajinan.nama_en AS nama_en, 
          kerajinan.stok AS stok, 
          kerajinan.harga AS harga, 
          kerajinan.deskripsi_id AS deskripsi_id, 
          kerajinan.deskripsi_en AS deskripsi_en,
          kerajinan.rating AS rating, 
          desa.id AS id_desa, desa.nama_desa AS nama_desa, 
          kecamatan.id AS id_kecamatan, kecamatan.nama_kecamatan AS nama_kecamatan, 
          kabupaten.id AS id_kabupaten, kabupaten.nama_kabupaten AS nama_kabupaten, 
          provinsi.id AS id_provinsi, provinsi.nama_provinsi AS nama_provinsi 
          FROM kerajinan
          JOIN desa ON kerajinan.id_lokasi = desa.id 
          JOIN kecamatan ON desa.district_id = kecamatan.id 
          JOIN kabupaten ON kecamatan.regency_id = kabupaten.id 
          JOIN provinsi ON kabupaten.province_id = provinsi.id
          JOIN kategori_kerajinan ON kategori_kerajinan.id_kerajinan = kerajinan.id
          JOIN kategori ON kategori.id = kategori_kerajinan.id_kategori
          JOIN gallery_kerajinan ON kerajinan.id = gallery_kerajinan.id_kerajinan
          GROUP BY gallery_kerajinan.id_kerajinan
        ');
        return $this->db->allSet();
      }
      else if ( $_SESSION['sortby'] == 'Recommended') {
        $this->db->query(
          'SELECT kerajinan.id AS id_kerajinan, 
          gallery_kerajinan.foto AS gallery,
          kerajinan.nama_id AS nama_id, 
          kerajinan.nama_en AS nama_en, 
          kerajinan.stok AS stok, 
          kerajinan.harga AS harga, 
          kerajinan.deskripsi_id AS deskripsi_id, 
          kerajinan.deskripsi_en AS deskripsi_en,
          kerajinan.rating AS rating, 
          desa.id AS id_desa, desa.nama_desa AS nama_desa, 
          kecamatan.id AS id_kecamatan, kecamatan.nama_kecamatan AS nama_kecamatan, 
          kabupaten.id AS id_kabupaten, kabupaten.nama_kabupaten AS nama_kabupaten, 
          provinsi.id AS id_provinsi, provinsi.nama_provinsi AS nama_provinsi 
          FROM kerajinan
          JOIN desa ON kerajinan.id_lokasi = desa.id 
          JOIN kecamatan ON desa.district_id = kecamatan.id 
          JOIN kabupaten ON kecamatan.regency_id = kabupaten.id 
          JOIN provinsi ON kabupaten.province_id = provinsi.id
          JOIN kategori_kerajinan ON kategori_kerajinan.id_kerajinan = kerajinan.id
          JOIN kategori ON kategori.id = kategori_kerajinan.id_kategori
          JOIN gallery_kerajinan ON kerajinan.id = gallery_kerajinan.id_kerajinan
          GROUP BY gallery_kerajinan.id_kerajinan
          ORDER BY kerajinan.rating DESC
        ');
        return $this->db->allSet();
      }
      else if ( $_SESSION['sortby'] == 'LowestPrice') {
        $this->db->query(
          'SELECT kerajinan.id AS id_kerajinan, 
          gallery_kerajinan.foto AS gallery,
          kerajinan.nama_id AS nama_id, 
          kerajinan.nama_en AS nama_en, 
          kerajinan.stok AS stok, 
          kerajinan.harga AS harga, 
          kerajinan.deskripsi_id AS deskripsi_id, 
          kerajinan.deskripsi_en AS deskripsi_en,
          kerajinan.rating AS rating, 
          desa.id AS id_desa, desa.nama_desa AS nama_desa, 
          kecamatan.id AS id_kecamatan, kecamatan.nama_kecamatan AS nama_kecamatan, 
          kabupaten.id AS id_kabupaten, kabupaten.nama_kabupaten AS nama_kabupaten, 
          provinsi.id AS id_provinsi, provinsi.nama_provinsi AS nama_provinsi 
          FROM kerajinan
          JOIN desa ON kerajinan.id_lokasi = desa.id 
          JOIN kecamatan ON desa.district_id = kecamatan.id 
          JOIN kabupaten ON kecamatan.regency_id = kabupaten.id 
          JOIN provinsi ON kabupaten.province_id = provinsi.id
          JOIN kategori_kerajinan ON kategori_kerajinan.id_kerajinan = kerajinan.id
          JOIN kategori ON kategori.id = kategori_kerajinan.id_kategori
          JOIN gallery_kerajinan ON kerajinan.id = gallery_kerajinan.id_kerajinan
          GROUP BY gallery_kerajinan.id_kerajinan
          ORDER BY kerajinan.harga ASC
        ');
        return $this->db->allSet();
      }
      else if ( $_SESSION['sortby'] == 'HighestPrice') {
        $this->db->query(
          'SELECT kerajinan.id AS id_kerajinan, 
          gallery_kerajinan.foto AS gallery,
          kerajinan.nama_id AS nama_id, 
          kerajinan.nama_en AS nama_en, 
          kerajinan.stok AS stok, 
          kerajinan.harga AS harga, 
          kerajinan.deskripsi_id AS deskripsi_id, 
          kerajinan.deskripsi_en AS deskripsi_en,
          kerajinan.rating AS rating, 
          desa.id AS id_desa, desa.nama_desa AS nama_desa, 
          kecamatan.id AS id_kecamatan, kecamatan.nama_kecamatan AS nama_kecamatan, 
          kabupaten.id AS id_kabupaten, kabupaten.nama_kabupaten AS nama_kabupaten, 
          provinsi.id AS id_provinsi, provinsi.nama_provinsi AS nama_provinsi 
          FROM kerajinan
          JOIN desa ON kerajinan.id_lokasi = desa.id 
          JOIN kecamatan ON desa.district_id = kecamatan.id 
          JOIN kabupaten ON kecamatan.regency_id = kabupaten.id 
          JOIN provinsi ON kabupaten.province_id = provinsi.id
          JOIN kategori_kerajinan ON kategori_kerajinan.id_kerajinan = kerajinan.id
          JOIN kategori ON kategori.id = kategori_kerajinan.id_kategori
          JOIN gallery_kerajinan ON kerajinan.id = gallery_kerajinan.id_kerajinan
          GROUP BY gallery_kerajinan.id_kerajinan
          ORDER BY kerajinan.harga DESC
        ');
        return $this->db->allSet();
      }
  }
  }
