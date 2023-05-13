<?php
class Produk
{
    private $koneksi;
    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }
    public function dataProduk()
    {
        $sql = "SELECT * FROM produk";
        $q = $this->koneksi->prepare($sql);
        $q->execute();
        $data = $q->fetchAll();
        return $data;
    }
    public function dataProduk_sayuran()
    {
        $sql = "SELECT * FROM produk WHERE kategori_produk_id='1'";
        $q = $this->koneksi->prepare($sql);
        $q->execute();
        $data = $q->fetchAll();
        return $data;
    }
    public function dataProduk_buah()
    {
        $sql = "SELECT * FROM produk WHERE kategori_produk_id='2'";
        $q = $this->koneksi->prepare($sql);
        $q->execute();
        $data = $q->fetchAll();
        return $data;
    }
    public function dataProdukID($id)
    {
        $sql = "SELECT * FROM produk WHERE id = ?";
        $q = $this->koneksi->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch();
        return $data;
    }
}
