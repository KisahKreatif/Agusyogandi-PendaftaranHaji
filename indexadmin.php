<?php
  include('koneksi.php');
  
?>
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:alertLogin.php?pesan=belum_login");
	}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>WEB PENDAFTARAN HAJI | Admin </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="modal" id="berita">
  <div class="modal-dialog">
    <div class="modal-content">


      <div class="modal-header">
        <h4 class="modal-title">Buat Berita</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
      <form action="prosesInputBerita.php" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <input type="text" class="form-control" placeholder="judul" name="judul" >
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="tanggal (22/02/20)" name="tanggal" >
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="penulis" name="penulis" >
        </div>
        <div class="form-group">
        <textarea class="form-control" rows="5" name="isi" placeholder="masukan isi berita"></textarea>
        </div>
        <div class="form-group">
        <input type="file" name="foto" required="required">
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Submit">  
        </div>
        </form>
      </div>

      
    </div>
  </div>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">

  <img src="images/logo.png" alt="logo" style="width:60px;">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="nav navbar-nav  ml-auto" role="tablist"  >
      <li class="nav-item">
        <a class="nav-link active mr-lg-4" data-toggle="pill" href="#ListDaftar">List Pendaftar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mr-lg-4" data-toggle="pill" href="#ListBerita">List Berita</a>
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
  <div class="tab-content">
    
    <div class="tab-pane container-fluid active" id="ListDaftar">


        <div class="container-fluid">
          <h2>List Pendaftar</h2></br>     
          <table class="table table-bordered">
            <thead>
              <tr class="bg-success">
                <th>Nama Lengkap</th>
                <th>No Validasi</th>
                <th>No KTP</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php 
			$data = mysqli_query($koneksi,"SELECT * FROM pendaftaran");
			while($d = mysqli_fetch_array($data)){
				?>
              <tr>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['nomervalidasi']; ?></td>
                <td><?php echo $d['nomerktp']; ?></td>
                <td><center><a class="btn btn-danger" href="hapusDataPendaftar.php?id=<?php echo $d['id']; ?>">HAPUS</a> | <a class="btn btn-success" href="detailPendaftar.php?id=<?php echo $d['id']; ?>">DETAIL</a> </center></td>
                <?php } ?>
            </tbody>
          </table>
        </div>

    </div>
    <div class="tab-pane container-fluid fade" id="ListBerita">

        <div class="container-fluid">
          <h2><strong>List Berita</strong></h2><a  class="btn btn-primary" data-toggle="modal" data-target="#berita">Buat Berita</a></br>
          </br>
             
          <table class="table table-bordered">
            <thead>
              <tr class="bg-success">
                <th>Judul</th>
                <th>Tanggal Terbit</th>
                <th>Penulis</th>
                <th>Deskripsi Berita</th>
                <th>Gambar</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php 
			$data = mysqli_query($koneksi,"SELECT * FROM berita");
			while($d = mysqli_fetch_array($data)){
				?>
              <tr>
                <td><?php echo $d['judul']; ?></td>
                <td><?php echo $d['tanggal']; ?></td>
                <td><?php echo $d['penulis']; ?></td>
                <td><?php echo $d['isi']; ?> </td>
                
                <td><img src="gambar/<?php echo $d['gambar'] ?>" width="40" height="35"></td>
                <td><center><a class="btn btn-danger" href="hapusBerita.php?id=<?php echo $d['id']; ?>">HAPUS</a></center></td>
                <?php } ?>
              </tr>
            </tbody>
          </table>
        </div>

    </div>
  </div>
</div>



</br>

  <div class="boxFooter">
      <div class="container-fluid">
          <div class="row">
              <div class="col-9">
                 <p class="txtfooter1"> Web Pendaftaran Haji | © 2020 All Rights Reserved. </p>
              </div>
              <div class="col-3">
                  <p class="txtfooter2"> Amrun</p>
              </div>
          </div>
      </div>
  </div>

</body>
</html>