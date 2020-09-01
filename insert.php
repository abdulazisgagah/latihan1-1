<?php
error_reporting(0);
$konek = mysqli_connect("localhost", "root", "", "wpu-hut");
$kode=$_GET['kode'];
$query="select * from pizza where id='$kode'";
$hsl=mysqli_query($konek,$query);
$row = mysqli_fetch_assoc($hsl);

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
  <form action="" class="form-horizontal" method="POST" enctype="multipart/form-data">
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
                <h1>Insert Menu</h1>
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
          <input type="file" name="gambar" id="gambar">
        </div>
    </div>

    <div class="row">
        <div class="col-sm-5">
        <button type="submit" class="btn btn-dark" name="btn">Tambah Data</button>
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
  // upload gambar
	$gambar = upload();
	if( !$gambar ){ 
		return false;
	}
 
  $sql="INSERT INTO pizza (id,nama,kategori,deskripsi,harga,gambar) VALUES ('$kode1','$nama','$kategori','$deskripsi','$harga','$gambar')";
  $hasil=mysqli_query($konek,$sql);

  if ($hasil){
    echo "<script language='JavaScript'>
    (window.alert('data sudah ditambah'))
       location.href='data.php'
    </script>";
  }
  else
  {
    echo "<script language='JavaScript'>
    (window.alert('data tidak ditambah'))
      location.href='insert.php'
    </script>";
   
  }
}

function upload() {
  $namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yg diupload 
	if ( $error === 4) {
		echo "<script>
				alert('pilih gambar terlebih dahulu');
			 </script>";
		return false;
	}
	// cek apakah yg diupload gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile); // explode yaitu fungsi memecah string menjadi array contoh: bulya.jpg = ['bulya','jpg']
	$ekstensiGambar = strtolower(end($ekstensiGambar)); // jadi setelah di explode ambil yang terakhir yaitu ekstensinya (jpg,jpeg,png) setelah itu diubah jadi huruf kecil semua

	if( !in_array($ekstensiGambar, $ekstensiGambarValid) )
	{ // jika bukan dari ekstensi
	echo "<script>
		   alert('yang anda upload bukan gambar');
		  </script>";
		  return false;

	}

	// cek jika ukurannya terlalu besar
	if( $ukuranFile > 1000000 ) {

		echo "<script>
				alert('ukuran terlalu besar');
		  </script>";
		  return false;

	}

	// generate nama baru agar tidak tertimpa
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar; 

	// lolos pengecekan, gambar siap diuopload dan masuk dala folder img
	move_uploaded_file($tmpName, 'img/pizza/' .$namaFileBaru);

  return $namaFileBaru;
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

