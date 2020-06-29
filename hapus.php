<?php
include 'script/konek.php';
$id = $_GET['id'];
$query = "select * from pizza where id='$id'";
$hsl = mysqli_query($konek, $query);
$ada = mysqli_num_rows($hsl);

$qry = "delete from pizza where id='$id'";
$hasil = mysqli_query($konek, $qry);
if ($hasil) {
    echo "<script language='Javascript'>
    (window.alert('Data Sudah Dihapus'))
    location.href='laporan.php'
    </script>";

} else {
    echo "<script language='Javascript'>
    (window.alert('Data Tidak dapat dihapus'))
    location.href='laporan.php'
    </script>";

}
