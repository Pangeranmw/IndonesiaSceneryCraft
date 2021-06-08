<?php

class Transaktion_model{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function tambahtransaksi($data, $id_user, $tanggal){
        $this->db->query("INSERT INTO transaksi VALUES ('0', :id_user, :tanggal_transaki, :alamat, :total, :kodepos, :nomorhp)");
        $this->db->bind('id_user', $id_user);
        $this->db->bind('tanggal_transaki', $tanggal);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('total', $data['total']);
        $this->db->bind('kodepos', $data['postalCode']);
        $this->db->bind('nomorhp', $data['mobile']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function updatestokbyid($id, $jumlah){
        $query = "UPDATE kerajinan SET stok = stok - :jumlah WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id',$id);
        $this->db->bind('jumlah',$jumlah);
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
}
