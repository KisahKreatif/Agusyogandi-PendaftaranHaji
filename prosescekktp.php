<?php 
// mengaktifkan session php
session_start();
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$ktp = $_POST['ktp'];

 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from pendaftaran where nomerktp='$ktp'");
    
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['nomerktp'] = $ktp;
	header("location:cetak_bukti_pendaftaran_haji.php");
}else{
	header("location:alertCetak.php?pesan=nodata");
}
?>