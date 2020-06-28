<?php
error_reporting(0);
$konek = mysqli_connect("localhost", "root", "", "wpu-hut");
$kode=$_GET['kode'];
$query="select * from pizza where id='$kode'";
$hsl=mysqli_query($konek,$query);
$row = mysqli_fetch_assoc($hsl);
$nama=$row["nama"];
$kategori=$row["kategori"];
$deskripsi=$row["deskripsi"];
$harga=$row["harga"];
$gambar=$row["gambar"];
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
  <form class="form-horizontal" method="POST" action=<?php echo "edit.php?kode=$kode"; ?>>
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

    <div class="form-group ">
        <label id="inputNama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
        </div>
    </div>

    <div class="form-group ">
        <label id="inputNama" class="col-sm-2 col-form-label">kategori</label>
        <div class="col-sm-10">
          <select id="inputkategori"class="form-control" name="kategori" value="<?php echo $kategori; ?>">
          <option>Pizza</option>
          <option>Pasta</option>
          <option>nasi</option>
          <option>minuman</option>
          </select>
        </div>
    </div>

    <div class="form-group ">
        <label id="inputNama" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="des" value="<?php echo $deskripsi; ?>">
        </div>
    </div>

    <div class="form-group ">
        <label id="inputNama" class="col-sm-2 col-form-label">Harga</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="harga" value="<?php echo $harga; ?>">
        </div>
    </div>

    <div class="form-group ">
        <label id="inputNama" class="col-sm-2 col-form-label">Gambar</label>
        <div class="col-sm-10">
          <input type="file" name="gambar" value="<?php echo $gambar; ?>">
        </div>
    </div>

    <div class="row">
        <div class="col-sm-5">
        <button type="submit" class="btn btn-dark" name="btn">Edit</button>
        </div>
      </div>

        </form>
    
<?php

$btn=$_POST['btn'];
if (isset($btn))
{
  $kode1=$_GET['kode'];
  $nama=$_POST["nama"];
  $kategori=$_POST["kategori"];
  $deskripsi=$_POST["des"];
  $harga=$_POST["harga"];
  $gambar=$_POST["gambar"];
 $sql="update pizza set nama='$nama',kategori='$kategori',deskripsi='$deskripsi',harga='$harga',gambar='$gambar' where id='$kode1'";
  $hasil=mysqli_query($konek,$sql);

  if ($hasil){
    echo "<script language='JavaScript'>
    (window.alert('data sudah disimpan'))
       location.href='data.php'
    </script>";
  }
  else
  {
    echo "<script language='JavaScript'>
    (window.alert('data tidak disimpan'))
      location.href='edit.php'
    </script>";
   
  }
}

?>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>