<?php
include "koneksi.php";

$from = $_POST['b4kode'];
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$price = $_POST['harga'];
$condition = $_POST['keterangan'];

$sql = "UPDATE `produk` SET `Kode`='$kode',`Nama`='$nama',`Harga`=$price,`Keterangan`='$condition' WHERE Kode = '$from'";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo " Pengubahan data gagal";
    echo "<a href='editdb.php'> Retry </a>";
} else {
    echo " Pengubahan data berhasil<br>";
    echo "<a href='readdb.php'> Show data </a>";
}
?>