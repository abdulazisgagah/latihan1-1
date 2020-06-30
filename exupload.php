<!DOCTYPE html>
<html>
<head>
    <title>Upload</title>
</head>
<body>
    <?php
$konek = mysqli_connect("localhost", "root", "", "wpu-hut");
error_reporting(0);

if ($_POST['upload']){
    $ektensi_dipeprbolehkan = array('png','jpg');
    $nama = $_FILES['file']['name'];
    $x = explode('.',$nama);
    $ekstensi = strtolower(end($x));
	$ukuran = $_FILES['file']['size'];
    $file_tmp =$_FILES['file']['tmp_name'];
    
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){

		if($ukuran < 1044070){
			move_uploaded_file($file_tmp, 'img/pizza/'.$nama);
			$query = mysqli_query($konek,"UPDATE pizza set VALUES(gambar, '$nama')");
			if($query){
				echo "file berhasil di upload";
			}else{
				echo "gagal mengupload gambar";
				}
			}else{
				echo "ukuran file terlalu besar";
				}
			}else{
				echo "eksistensi file tidak diperbolehakan";
			}
    }
    ?>

    <br>
    <br>
    <a href="edit.php">upload lagi</a>
    <br>
    <br>    
    <table>
	<?php
	$data = mysqli_query($konek,"select * from pizza");
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td>
			<img src="<?php echo "img/pizza/".$d['gambar']; ?>">
		</td>
	</tr>

	<?php }?>
</table>
</body>
</html>