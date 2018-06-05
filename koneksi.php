<?php
class Koneksi {
    private $server = "";
    private $username = "id4995319_dev_1"; //root
    private $password = "amaludinrizqi"; //""
    private $db = "id4995319_projekuasweb";

    function getKoneksi() {
        return new mysqli($this->server, $this->username,
        $this->password, $this->db);
    }
}
?>