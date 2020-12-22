<?php 
include 'koneksi.php';

$judul = $_POST['judul'];
$tanggal = $_POST['tanggal'];
$penulis = $_POST['penulis'];
$isi = $_POST['isi'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location:AlertInput.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO berita VALUES(NULL,'$xx','$judul','$tanggal','$penulis', '$isi')");
		header("location:AlertInput.php?alert=berhasil");
	}else{
		header("location:alertInput.php?alert=gagak_ukuran");
	}
}