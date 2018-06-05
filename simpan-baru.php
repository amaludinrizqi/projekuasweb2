<?php
include "koneksi.php";
$koneksiObj = new Koneksi();
$koneksi = $koneksiObj->getKoneksi();

if($koneksi->connect_error) {
    echo "gagal koneksi : " . $koneksi->connect_error;
}else {
    echo "sambungan basis data berhasil";
}

//echo "NIM : ". $_POST["kode"];
//echo "NAMA MAHASISWA : ". $_POST["namamahasiswa"];
//echo "JURUSAN : ". $_POST["JURUSAN"];
$nim 	= $_POST['nim'];
$nama   = $_POST['nama'];
$jurusan = $_POST['jurusan'];

$query = "insert into mahasiswa values('$nim','$nama','$jurusan')";

//echo "<br>".$query;

if($koneksi->query($query) === true) {
    echo "<br> Data ". $_POST["nama"]. " berhasil disimpan".'<a href="main.php">Lihat Data</a>';
}else{
    $koneksi->error;
    echo "<br>Data gagal disimpan" . '<a href="main.php">Lihat Data</a>';
}

$koneksi->close();
?>