<?php
include "koneksi.php";

$kode = $_GET['kode'];

$sql = "DELETE FROM `produk` WHERE Kode = '$kode'";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo " Penghapusan data gagal";
    echo "<a href='inputdb.php'> Retry </a>";
} else {
    echo " Penghapusan data berhasil<br>";
    echo "<a href='readdb.php'> Show data </a>";
}
?>