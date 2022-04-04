<?php
include "koneksi.php";

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$price = $_POST['harga'];
$condition = $_POST['keterangan'];

$sql = "INSERT INTO `produk`(`Kode`, `Nama`, `Harga`, `Keterangan`) VALUES ('$kode','$nama',$price,'$condition')";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo " Penambahan data gagal";
    echo "<a href='inputdb.php'> Retry </a>";
} else {
    echo " Penambahan data berhasil<br>";
    echo "<a href='readdb.php'> Show data </a>";
}
?>