<html>
<Head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</Head>
<Body>
    <div style="padding:120px;">
        <center>
        <h3>Daftar Smartphone</h3>
        <div class="d-inline-flex p-2 bd-highlight">
            <table class="table table-dark table-striped">
                <tr>
                    <td>Kode</td><td>Nama</td><td>Harga</td><td>Keterangan</td><td>Action</td>
                </tr>
                <form method="post" action="editdb.php">
                <?php
                $host = "localhost";
                $user = "root";
                $password = "";
                $dbname = "zey";

                $koneksi = mysqli_connect($host,$user,$password,$dbname);
                if (!$koneksi){
                    echo "Koneksi gagal";
                }

                $sql = "SELECT * FROM produk";
                $hasil = mysqli_query($koneksi,$sql);
                while($row = mysqli_fetch_array($hasil)){
                    ?>
                    <tr>
                        <td><?=$row['Kode'];?></td>
                        <td><?=$row['Nama'];?></td>
                        <td><?=$row['Harga'];?></td>
                        <td><?=$row['Keterangan'];?></td>
                        <td><a href='editdb.php?id=<?=$row['Kode'];?>'>Edit</a> || <a href='deletedb.php?kode=<?=$row['Kode'];?>'>Delete</a></td>
                    </tr>
                    <?php
                }

                ?>
                </form>
            </table>
        </div>
        <br>
        <button onclick="window.location.href='inputdb.php'" class="btn btn-secondary">Tambahkan Data</button>
        </center>
    </div>
</Body>
</html>
