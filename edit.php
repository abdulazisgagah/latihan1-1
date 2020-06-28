<?php
$konek = mysqli_connect("localhost", "root", "", "wpu-hut");
$kode=$_GET['kode'];
$query="select * from wpu-hut where id='$kode'";
$hsl=mysqli_query($konek,$query);
$nama=$hsl["nama"];
$kategori=$hsl["kategori"];
$deskripsi=$hsl["deskripsi"];
$harga=$hsl["harga"];
$gambar=$hsl["gambar"];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Pizza HUT</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="img/logo.png" width="120"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="latihan1.php">Home</a>
                    <a class="nav-item nav-link active" href="data.php">Data</a>
                    </div>
                </div>
            </div>
        </nav>
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h1>Edit Menu</h1>
            </div>
        </div>

        <div class="row">
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Nama</th>
                <th scope="col">Kategori</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Harga</th>
                <th scope="col">Url Gambar</th>
                <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
  <?php
$sql = "select * from pizza";
$hasil = mysqli_query($konek, $sql);
?>
            <?php while ($row = mysqli_fetch_assoc($hasil)) {?>
                <tr>
                <th><?=$row["id"];?></th>
                <td><?=$row["nama"];?></td>
                <td><?=$row["kategori"];?></td>
                <td><?=$row["deskripsi"];?></td>
                <td><?=$row["harga"];?></td>
                <td><?=$row["gambar"];?></td>
                <td><a href='edit.php?kode=<?=$row["id"];?>' class='btn btn-warning'>Edit</a></td>
                </tr>
                <?php }?>
            </tbody>
            </table>

        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>