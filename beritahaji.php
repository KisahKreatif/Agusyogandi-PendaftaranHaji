<!DOCTYPE html>
<html lang="en">
<head>
  <title>WEB PENDAFTARAN HAJI | Berita Haji </title>
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
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link ml-lg-4 mr-lg-4" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mr-lg-4" href="daftarhaji.php">Daftar Haji</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mr-lg-4" href="#">Berita Haji</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mr-lg-4" href="carahaji.php">Tata Cara Haji</a>
      </li>
    </ul>
  </div>
</nav>

<div class="boxHeader">
    <img src="images/bgberita.jpg" width="100%" height="100%" class="banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-9">
                <p class="txtHeader"><strong>Berita</strong></br>
                Seputar Haji</p>
            </div>
            <div class="col3">
            
            </div>
        </div>
    </div>
  </div>

</br>

  <div class="container-fluid">
      <div class="row">
          <div class="col-9">
            <div class="card">
                <div class="card-body">
                <div class="row">
                      <div class="col-6">

                        <?php
                include('koneksi.php');
                
              ?>
                        <?php 
                    $data = mysqli_query($koneksi,"SELECT * FROM berita WHERE id IN (SELECT MAX(id) FROM `berita`) ");
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
          </div>
          <div class="col-3">
              <div class="card">
                  <div class="card-body">
                  <?php 
                    $data = mysqli_query($koneksi,"SELECT * FROM berita");
                    while($d = mysqli_fetch_array($data)){
                      ?>
                      <ul>
                          <li>
                          <p><strong><?php echo $d['judul']; ?></strong> </br> <?php echo $d['tanggal']; ?> | <?php echo $d['penulis']; ?></p>
                          <a class="btn btn-success" href="detailBerita.php?id=<?php echo $d['id']; ?>">Lihat Berita</a>
                          </li>
                        </br>
                        
                      </ul>  <?php } ?>
                  </div>
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
