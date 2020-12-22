<!DOCTYPE html>
<html lang="en">
<head>
  <title>WEB PENDAFTARAN HAJI | Daftar Haji</title>
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

  <div class="collapse navbar-collapse" name="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link ml-lg-4 mr-lg-4" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mr-lg-4" href="daftarhaji.php">Daftar Haji</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mr-lg-4" href="#">Cetak Bukti Pendaftaran Haji</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mr-lg-4" href="beritahaji.php">Berita Haji</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mr-lg-4" href="carahaji.php">Tata Cara Haji</a>
      </li>
    </ul>
  </div>
</nav>

<div class="boxHeaderAdmin">
    
    <div class="container">
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-6">
            <center><p class="txtHeaderAdmin"><strong>Cetak Bukti Pendaftaran Haji</strong></p></center>
            </div>
            <div class="col-3">
            </div>
        </div>
    </div>

</div>
</br>
</br>
<div class="container">
<center>
<h2>Masukan Nomer KTP yang sudah di daftarkan</h2>
</center>
<form action="prosescekktp.php" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <input type="text" class="form-control" placeholder="Enter KTP Number" name="ktp">
    </div>
    <div class="form-group">
    
    </div>
    <button type="submit" class="btn btn-primary btn-block">Cari</button>
  </form>
</div>
<hr/>


</br>
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
