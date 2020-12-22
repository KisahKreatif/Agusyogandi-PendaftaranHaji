
<!DOCTYPE html>
<html lang="en">
<head>
  <title>WEB PENDAFTARAN HAJI | Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="modal" id="admin">
  <div class="modal-dialog">
    <div class="modal-content">


      <div class="modal-header">
        <h4 class="modal-title">Login Admin</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
      <form action="proseslogin.php" method="post">

        <div class="form-group">
          <input type="text" class="form-control" placeholder="Username" name="username" id="username">
        </div>

        <div class="form-group">
          <input type="password" class="form-control" placeholder="Password" name="password" id="password">
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Log In">
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
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link ml-lg-4 mr-lg-4" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mr-lg-4" href="daftarhaji.php">Daftar Haji</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mr-lg-4" href="beritahaji.php">Berita Haji</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mr-lg-4" href="carahaji.php">Tata Cara Haji</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mr-lg-4"  class="btn btn-primary" data-toggle="modal" data-target="#admin">Login Admin</a>
      </li>
    </ul>
  </div>
</nav>

  <div class="boxHeader">
    <img src="images/bgmain.jpg" width="100%" height="100%" class="banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-9">
                <p class="txtHeader"><strong>Selamat Datang</strong></br>
                di Web Pendaftaran Haji</p>
            </div>
            <div class="col3">
            <img src="images/logo.png" class="imgBanner">
            </div>
        </div>
    </div>
  </div>

</br>
</br>
</br>
</br>
</br>
  <div class="boxBerita">
    <div class="container-fluid">
      <div class="row">
        <div class="col-6">
          <h1><center>Berita Haji Terbaru</center></h1>
          <hr/>
          <?php
  include('koneksi.php');
  
?>
          <?php 
			$data = mysqli_query($koneksi,"SELECT * FROM berita WHERE id IN (SELECT MAX(id) FROM `berita`)");
			while($d = mysqli_fetch_array($data)){
				?>
          </br>
          <h1><?php echo $d['judul']; ?></h2>
          <p><?php echo $d['tanggal']; ?> | <strong><?php echo $d['penulis']; ?> </strong></p>
          <p><?php echo $d['isi']; ?></p>
          
        </div>

        <div class="col-6">
        <img src="gambar/<?php echo $d['gambar'] ?>" width="100%" height="400px">
          <?php } ?>
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
