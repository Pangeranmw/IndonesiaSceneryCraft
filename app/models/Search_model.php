<?php

class Search_model{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    public function searchdestinasi($text, $lang){
        $this->db->query(
            "SELECT destinasi.id AS id, destinasi.nama_id AS nama_id, destinasi.nama_en AS nama_en, 
            destinasi.artikel_id AS artikel_id,
            destinasi.artikel_en AS artikel_en,
            destinasi.rating AS rating, 
            destinasi.maps AS maps, 
            gallery_destination.foto AS gallery,
            gallery_destination.id AS id_gallery,
            desa.id AS id_desa, desa.nama_desa AS nama_desa, 
            kecamatan.id AS id_kecamatan, kecamatan.nama_kecamatan AS nama_kecamatan, 
            kabupaten.id AS id_kabupaten, kabupaten.nama_kabupaten AS nama_kabupaten, 
            provinsi.id AS id_provinsi, provinsi.nama_provinsi AS nama_provinsi 
            FROM destinasi
            JOIN desa ON destinasi.id_lokasi = desa.id 
            JOIN kecamatan ON desa.district_id = kecamatan.id 
            JOIN kabupaten ON kecamatan.regency_id = kabupaten.id 
            JOIN provinsi ON kabupaten.province_id = provinsi.id
            JOIN gallery_destination ON gallery_destination.id_destination = destinasi.id
            WHERE destinasi.nama_$lang LIKE '%$text%' OR destinasi.artikel_$lang LIKE '%$text%'
            GROUP BY gallery_destination.id_destination
          ");
          // $this->db->bind('destinasi.id',$id);
          return $this->db->allSet();
    }public function searchculture($text, $lang){
        $this->db->query(
            "SELECT gallery_budaya.foto as gallery, 
            budaya.id AS id, budaya.nama_id AS nama_id, 
            budaya.nama_en AS nama_en, 
            budaya.artikel_id AS artikel_id, 
            budaya.artikel_en AS artikel_en, 
            budaya.maps AS maps, 
            budaya.rating AS rating, 
            desa.nama_desa AS nama_desa, 
            kecamatan.nama_kecamatan AS nama_kecamatan, 
            IF(kabupaten.nama_kabupaten LIKE '%kabupaten%', SUBSTRING(nama_kabupaten,11), SUBSTRING(nama_kabupaten,6)) AS nama_kabupaten, 
            provinsi.nama_provinsi AS nama_provinsi 
            FROM budaya JOIN desa ON budaya.id_lokasi = desa.id 
            JOIN kecamatan ON desa.district_id = kecamatan.id 
            JOIN kabupaten ON kecamatan.regency_id = kabupaten.id 
            JOIN provinsi ON kabupaten.province_id = provinsi.id
            JOIN gallery_budaya ON gallery_budaya.id_budaya = budaya.id
            WHERE budaya.nama_$lang LIKE '%$text%' OR budaya.artikel_$lang LIKE '%$text%'
            GROUP BY gallery_budaya.id_budaya
          ");
          // $this->db->bind('destinasi.id',$id);
          return $this->db->allSet();
    }public function searchcraft($text, $lang){
        $this->db->query(
            "SELECT kerajinan.id AS id_kerajinan, 
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
            WHERE kerajinan.nama_$lang LIKE '%$text%' OR kerajinan.deskripsi_$lang LIKE '%$text%'
            GROUP BY kerajinan.nama_id
          ");
          // $this->db->bind('destinasi.id',$id);
          return $this->db->allSet();
    }
}
