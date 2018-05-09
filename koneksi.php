<?php
class Koneksi {
    private $server = "";
    private $username = "id4995319_stok_barang"; //root
    private $password = "amaludinrizqi"; //""
    private $db = "id4995319_stok_barang";

    function getKoneksi() {
        return new mysqli($this->server, $this->username,
        $this->password, $this->db);
    }
}
?>