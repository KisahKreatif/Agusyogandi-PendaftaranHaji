<?php
  include('koneksi.php');
  
	session_start();
$nomerktp=$_SESSION['nomerktp']
	?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta charset="utf-8">
    <style>
        #judul{
            text-align:center;
            font-size:20px
        }

        #halaman{
            width: auto; 
            height: auto; 
            position: absolute; 
          
            padding-top: 30px; 
            padding-left: 30px; 
            padding-right: 30px; 
            padding-bottom: 80px;
        }
        #pend{
            width: 100px;
            height: 40px;
            text-align: center;
           
            border: 1px solid;
        }

    </style>

</head>
<body>

<?php 
	$data = mysqli_query($koneksi,"select * from pendaftaran where nomerktp='$nomerktp'");
	while($d = mysqli_fetch_array($data)){
?>

<div id=halaman>

<table width="100%">
<tr>
<td width="20%" align="left"><img src="images/logo.png" alt="logo" style="width:100px;"></td>
<td width="65%" align="left"><h3>KANTOR KEMENTRIAN AGAMA <br> KOTA JAKARTA TIMUR</h3></td>
<td width="25%" align="center"><p>Nomer Pendaftaran</p>
	<div id="pend">
		<p>00000<?php echo $d['id']; ?></p>
	</div>
</td>
</tr>
</table>

        <h3 id=judul>SURAT PENDAFTARAN PERGI HAJI (SPPH)</h3>


        <table>
            <tr>
                <td style="width: 30%;">Nama</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?php echo $d['nama']; ?> </td>
            </tr>
            <tr>
                <td style="width: 30%;">No Validasi</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?php echo $d['nomervalidasi']; ?> </td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">No KTP</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;"><?php echo $d['nomerktp']; ?> </td>
            </tr>
            <tr>
                <td style="width: 30%;">Nama Ayah Kandung</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?php echo $d['namaayah']; ?> </td>
            </tr>
            <tr>
                <td style="width: 30%;">Tempat Tanggal Lahir</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?php echo $d['ttl']; ?> </td>
            </tr>
            <tr>
                <td style="width: 30%;">Umur</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?php echo $d['umur']; ?> </td>
            </tr>
            <tr>
                <td style="width: 30%;">Jenis Kelamin</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?php echo $d['jeniskelamin']; ?> </td>
            </tr>
            <tr>
                <td style="width: 30%;">Alamat</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?php echo $d['alamat']; ?> </td>
            </tr>
            <tr>
                <td style="width: 30%;">Kelurahan</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?php echo $d['keluarahan']; ?> </td>
            </tr>
            <tr>
                <td style="width: 30%;">Kecamatan</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?php echo $d['kecamatan']; ?> </td>
            </tr>
            <tr>
                <td style="width: 30%;">Kota / Kabupaten</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?php echo $d['kota']; ?> </td>
            </tr>
            <tr>
                <td style="width: 30%;">kode Pos</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?php echo $d['kodepos']; ?> </td>
            </tr>
            <tr>
                <td style="width: 30%;">No Hp</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?php echo $d['nohp']; ?> </td>
            </tr>
            <tr>
                <td style="width: 30%;">Pekerjaan</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?php echo $d['pekerjaan']; ?> </td>
            </tr>
            <tr>
                <td style="width: 30%;">Status</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?php echo $d['status']; ?> </td>
            </tr>
            <tr>
                <td style="width: 30%;">Golongan Darah</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?php echo $d['golongandarah']; ?> </td>
            </tr><br>
            <tr>
                <td style="width: 30%;"><img src="gambar/<?php echo $d['xxfoto'] ?>"width="120" height="135"></td>
                <td style="width: 5%;"></td>
                <td style="width: 60%; float: right; text-align: right;">
                        <p style=" width: 100%; text-align: left; float: right;">Sanggal Set : <?php echo date('d / M / y');?></p>
                        <p style=" width: 100%; text-align: left; float: right;">Bank </p>
                        <p style=" width: 100%; text-align: left; float: right;">No Rekening</p>
                </td>
            </tr>

        </table>

     
        


 </div>
<?php } ?>

<script>
	window.print();
</script>
	
</body>
</html>