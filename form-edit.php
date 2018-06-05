<h2> FORMULIR UPDATE MAHASISWA</h2>
<hr>
<?php
include "koneksi.php";

$koneksiObj = new Koneksi();
$koneksi = $koneksiObj->getKoneksi();

if($koneksi->connect_error) {
    echo "Gagal koneksi : ". $koneksi->connect_error;
}
$query = "select * from mahasiswa where nim='".
    $nim = $_GET['nim']. "'";
$data = $koneksi->query($query);
$nim = "";
$nama = "";
$jurusan = "";
if ($data->num_rows <= 0) {
    echo "mohon untuk mengisi dengan benar";
}else {
    while($row =$data->fetch_assoc()) {
        $nama = $row ["nama"];
        $jurusan = $row ["jurusan"];
    }
}
?>
<form action="update.php" method="post">
    <table>
        <tr>
            <td>NIM</td>
            <td>: <input type="text" name="nim" readonly="true"
                value= <?php echo $nim = $_GET ["nim"]; ?> ></td>
        </tr>
        <tr>
            <td>NAMA LENGKAP</td>
            <td>: <input type="text" name="nama"
                value="<?php echo $nama; ?>"></td>
        </tr>
        <tr>
                <td>JURUSAN </td>
                <td>: <input type= "text" name= "jurusan"
                value=<?php echo $jurusan; ?> ></td>
            </tr>
        </table>
        <input type="submit" value="simpan">
    </form>