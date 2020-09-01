<?php
$konek = mysqli_connect("localhost", "root", "", "wpu-hut");
$id = $_GET['id'];
$query = "select * from pizza where id='$id'";
$hsl = mysqli_query($konek, $query);
$row = mysqli_fetch_assoc($hsl);
$nama = $row["nama"];
$harga = $row["harga"];
$gambar = $row["gambar"];
$kategori = $row["kategori"];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        .tengah {
            margin-left: 400px;
            margin-top: 50px;
            padding-top: 1.5rem;
        }
    </style>
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
            <div class="col-4 offset-5 mb-5">
                <h1 class="bg-secondary" style="display:inline; color: white; border-radius:10px;">&emsp;Checkout&emsp;</h1>
            </div>
        </div>
        <div class="row mt-6 ">
            <div class="col-4">
                <img src="img/pizza/<?= $gambar ?>" class="img-thumbnail" width="300px">
            </div>
            <div class="col-8">
                <h3 class="font-weight-bold "><?= $nama ?></h3>
                <h6 class="mb-4">Kategori: <?= $kategori ?></h6>

                <h5 class='font-weight-bold mb-3' style="color:tomato;">Rp. <?= $harga ?></h5>
                <div class="row mb-4">
                    <div class="col-md-1 ">
                        <button class="btn btn-outline-dark font-weight-bold sub">-</button>
                    </div>
                    <div class="col-md-1 pl-0 pr-0">
                        <input type="number" class="form-control text-center" min="1">
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-outline-dark font-weight-bold add">+</button>
                    </div>
                </div>
            </div>
            <!-- <div class="col-1 offset-2" style="margin-right: -45px;">
                <button class="btn btn-outline-dark">-</button>
            </div>
            <div class="col-6">
                <input type="text" class="form-control" placeholder="0">
            </div>
            <div class="col-1 offset 2">
                <button class="btn btn-outline-dark" style="margin-left: -12px;">+</button>
            </div>
            <div class="col-6" style="margin-top:20px;margin-left: 280px;">
                <fieldset disabled>
                    <label for="disabledTextInput">Rp. <?= $harga ?></label>
                </fieldset>
            </div> -->

        </div>
    </div>
    <!--
    <img src="img/pizza/<?= $gambar ?>" class="rounded float-left" alt="Gambar Loading"
        style="margin-top: 40px ; margin-left: 30px;">
    <div class="col">
        <button type="button" class="btn btn-outline-success" style="margin-left:520px; margin-top: 50px;">Lanjut
            Yuk</button>

    </div> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script>
        $('.add').click(function() {
            if ($(this).prev().val() < 10) {
                $(this).prev().val(+$(this).prev().val() + 1);
            }
        });
        $('.sub').click(function() {
            if ($(this).next().val() > 1) {
                if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
            }
        });
    </script>
</body>

</html>