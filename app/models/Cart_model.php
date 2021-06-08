<?php
    Class Cart_model{
        private $db;
        private $table = 'keranjang';
        public function __construct()
        {
            $this->db = new Database();
        }
        public function getAllCartUser($id){
            $this->db->query("SELECT keranjang.id AS id_keranjang, keranjang.jumlah AS jumlah,
            kerajinan.nama_id AS nama_id, 
            kerajinan.nama_en AS nama_en,
            gallery_kerajinan.id AS id,
            gallery_kerajinan.foto AS gallery,
            kerajinan.id AS id_kerajinan,
            kerajinan.stok AS stok, 
            kerajinan.harga AS harga, 
            kerajinan.rating AS rating, 
            desa.id AS id_desa, desa.nama_desa AS nama_desa, 
            kecamatan.id AS id_kecamatan, kecamatan.nama_kecamatan AS nama_kecamatan, 
            kabupaten.id AS id_kabupaten, kabupaten.nama_kabupaten AS nama_kabupaten, 
            provinsi.id AS id_provinsi, provinsi.nama_provinsi AS nama_provinsi 
            FROM keranjang
            JOIN kerajinan ON kerajinan.id = keranjang.id_kerajinan
            JOIN gallery_kerajinan ON keranjang.id_kerajinan = gallery_kerajinan.id_kerajinan
            JOIN desa ON kerajinan.id_lokasi = desa.id 
            JOIN kecamatan ON desa.district_id = kecamatan.id 
            JOIN kabupaten ON kecamatan.regency_id = kabupaten.id 
            JOIN provinsi ON kabupaten.province_id = provinsi.id
            WHERE keranjang.id_user = :id
            GROUP BY kerajinan.nama_id 
            ORDER BY keranjang.id ASC
            ");
            $this->db->bind('id', $id);
            return $this->db->allSet();
        }
        public function tambah($data)
        {
            $query = "INSERT INTO keranjang VALUES ('0', :id_user, :id_kerajinan, :jumlah)";
            $this->db->query($query);
            $this->db->bind('id_user', $data['id_user']);
            $this->db->bind('id_kerajinan', $data['id_kerajinan']);
            $this->db->bind('jumlah', $data['jumlah']);
            $this->db->execute();
            return $this->db->rowCount();
        }
        public function deletecartuser($id)
        {
            $query = "DELETE FROM keranjang WHERE id_user =:id";
            $this->db->query($query);
            $this->db->bind('id',$id);
            $this->db->execute();
            return $this->db->rowCount();
        }
        public function delete($id, $table)
        {
            $query = "DELETE FROM ". $table ." WHERE id =:id";
            $this->db->query($query);
            $this->db->bind('id',$id);
            $this->db->execute();
            return $this->db->rowCount();
        }
        public function selectkeranjangbyidkerajinan($id, $id_user)
        {
            $this->db->query("SELECT * FROM keranjang WHERE id_kerajinan =:id AND id_user = :id_user");
            $this->db->bind('id', $id);
            $this->db->bind('id_user',$id_user);
            return $this->db->singleSet();
        }
        public function updatejumlahbyid($id, $jumlah, $id_user){
            $query = "UPDATE keranjang SET jumlah = :jumlah WHERE id_kerajinan=:id AND id_user = :id_user";
            $this->db->query($query);
            $this->db->bind('id',$id);
            $this->db->bind('jumlah',$jumlah);
            $this->db->bind('id_user',$id_user);
            $this->db->execute();
            return $this->db->rowCount();
        }
    }
