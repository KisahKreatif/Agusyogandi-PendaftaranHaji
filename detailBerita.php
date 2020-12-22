<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from berita where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>WEB PENDAFTARAN HAJI | <?php echo $d['tanggal']; ?> | <?php echo $d['penulis']; ?> </title>
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
    <img src="gambar/<?php echo $d['gambar'] ?>" width="100%" height="100%" class="banner">
  </div>
</br>
<div class="container">
    <h1><?php echo $d['judul']; ?></h1>
    <hr/>
    <h5><?php echo $d['tanggal']; ?> | <?php echo $d['penulis']; ?> </h5>

    <p><?php echo $d['isi']; ?></p>
</div>

    <?php }?>
</br>

</body>
</html>
