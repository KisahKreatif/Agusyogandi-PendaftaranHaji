<?php 
include 'koneksi.php';

$nama = $_POST['nama'];
$nomervalidasi = $_POST['nomervalidasi'];
$nomerktp = $_POST['nomerktp'];
$ttl = $_POST['ttl'];
$namaayah = $_POST['namaayah'];
$umur = $_POST['umur'];
$jeniskelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$kelurahan = $_POST['kelurahan'];
$kecamatan = $_POST['kecamatan'];
$kodepos = $_POST['kodepos'];
$kota = $_POST['kota'];
$nohp = $_POST['nohp'];
$pekerjaan = $_POST['pekerjaan'];
$status = $_POST['status'];
$golongandarah = $_POST['golongandarah'];
$tinggi = $_POST['tinggi'];
$berat = $_POST['berat'];


$randkk = rand();
$randakte = rand();
$randfoto = rand();
$ekstensi =  array('png','jpg','jpeg','gif');

$filenamekk = $_FILES['kk']['name'];
$filenameakte = $_FILES['akte']['name'];
$filenamefoto = $_FILES['foto']['name'];

$ukurankk = $_FILES['kk']['size'];
$ukuranakte = $_FILES['akte']['size'];
$ukuranfoto = $_FILES['foto']['size'];

$extkk = pathinfo($filenamekk, PATHINFO_EXTENSION);
$extakte = pathinfo($filenameakte, PATHINFO_EXTENSION);
$extfoto = pathinfo($filenamefoto, PATHINFO_EXTENSION);
 
if(!in_array($extkk,$ekstensi) ) {
	header("location:alertdaftar.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
        $xxkk = $randkk.'_'.$filenamekk;
        $xxakte = $randakte.'_'.$filenameakte;
        $xxfoto = $randfoto.'_'.$filenamefoto;
        move_uploaded_file($_FILES['kk']['tmp_name'], 'gambar/'.$randkk.'_'.$filenamekk);
        move_uploaded_file($_FILES['akte']['tmp_name'], 'gambar/'.$randakte.'_'.$filenameakte);
        move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$randfoto.'_'.$filenamefoto);
		mysqli_query($koneksi, "INSERT INTO pendaftaran VALUES(NULL,'$nama','$nomervalidasi','$nomerktp','$ttl', '$namaayah','$umur','$jeniskelamin','$alamat','$kelurahan','$kecamatan','$kodepos','$kota','$nohp','$pekerjaan','$status','$golongandarah','$tinggi','$berat','$xxkk','$xxakte','$xxfoto')");
		header("location:alertdaftar.php?alert=berhasil");
	}else{
		header("location:alertdaftar.php?alert=gagak_ukuran");
	}
}