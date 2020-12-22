<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from pendaftaran where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>WEB PENDAFTARAN HAJI | DATA PENDAFTAR | <?php echo $d['nama']; ?>  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">

<img src="images/logo.png" alt="logo" style="width:60px;">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="nav navbar-nav  ml-auto" role="tablist"  >
    <li class="nav-item">
      <a class="nav-link active mr-lg-4"  href="indexadmin.php">List Pendaftar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link mr-lg-4"  href="indexadmin.php">List Berita</a>
    </li>
    <li class="nav-item">
      <a class="nav-link mr-lg-4" href="logout.php">Logout</a>
    </li>
  </ul>
</div>
</nav>


<div class="boxHeaderAdmin">
  
  <div class="container-fluid">
      <div class="row">
          <div class="col-9">
              <p class="txtHeaderAdmin"><strong>Kelola</strong></br>
              Semuanya Disini</p>
          </div>
          <div class="col3">
          <img src="images/logo.png" class="imgBannerAdmin">
          </div>
      </div>
  </div>
</div>

</br>

<div class="container-fluid">
          <h2><strong>Detail Pendaftar</strong> | <td><?php echo $d['nomerktp']; ?></td></h2></br>     
          <table class="table table-bordered">
              <div class="row">
                  <div class="col-4">
                        <thead>
                            <tr class="bg-success">
                                <th>Nama Lengkap</th>
                                <th>No Validasi</th>
                                <th>TTL</th>
                                <th>Nama Ayah</th>
                                <th>Umur</th>
                                <th>Kelamin</th>
                                <th>Alamat</th>
                                <th>Kelurahan</th>
                                
                               
                            </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td><?php echo $d['nama']; ?></td>
                            <td><?php echo $d['nomervalidasi']; ?></td>
                            <td><?php echo $d['ttl']; ?></td>
                            <td><?php echo $d['namaayah']; ?></td>
                            <td><?php echo $d['umur']; ?></td>
                            <td><?php echo $d['jeniskelamin']; ?></td>
                            <td><?php echo $d['alamat']; ?></td>
                            <td><?php echo $d['keluarahan']; ?></td>
                      
                        
                        </tbody>
                  </div>

                  <div class="col-4">
                        <thead>
                            <tr class="bg-success">
                                <th>Kecamatan</th>
                                <th>Kode Pos</th>
                                <th>Kota / Kabupaten</th>
                                <th>No Hanphone</th>
                                <th>Pekerjaan</th>
                                <th>Status</th>
                                <th>Golongan Darah</th>
                                <th>Tinggi Badan</th>
                            
                               
                            </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td><?php echo $d['kecamatan']; ?></td>
                            <td><?php echo $d['kodepos']; ?></td>
                            <td><?php echo $d['kota']; ?></td>
                            <td><?php echo $d['nohp']; ?></td>
                            <td><?php echo $d['pekerjaan']; ?></td>
                            <td><?php echo $d['status']; ?></td>
                            <td><?php echo $d['golongandarah']; ?></td>
                            <td><?php echo $d['tinggi']; ?></td>
                      
                        
                        </tbody>

                  </div>
    
                  <div class="col-4 mt-2">
                        <thead>
                            <tr class="bg-success">
                                <th>Berat Badan</th>
                                <th>Foto KK</th>
                                <th>Foto Akta</th>
                                <th>Foto</th>
                                <th>No KTP</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td><?php echo $d['berat']; ?></td>
                            <td><img src="gambar/<?php echo $d['xxkk'] ?>" width="40" height="35"></td>
                            <td><img src="gambar/<?php echo $d['xxakte'] ?>" width="40" height="35"></td>
                            <td><img src="gambar/<?php echo $d['xxfoto'] ?>" width="40" height="35"></td>
                            <td><?php echo $d['nomerktp']; ?></td>
                            <td><center><a class="btn btn-danger" href="hapusDataPendaftar.php?id=<?php echo $d['id']; ?>">HAPUS</a></center></td>
                        
                        </tbody>
                  </div>
              </div>
           
          </table>
        </div>

    <?php }?>
</br>

</body>
</html>
