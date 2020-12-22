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
        <a class="nav-link mr-lg-4" href="#">Daftar Haji</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mr-lg-4" href="Cetakbukti.php">Cetak Bukti Pendaftaran Haji</a>
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
</br>
</br>
</br>
</br>
<div class="container-fluid">
<h1><center>Silahkan isi Form di bawah ini</center></h1>
<hr/>
</br>
    <div class="card">
        <div class="card-body">
            <div class="container-fluid">
                <form action="prosesDaftarHaji.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        
                        <input type="text" class="form-control" placeholder="Nama" name="nama">
                    </div>

                    <div class="form-group">
                      
                        <input type="text" class="form-control" placeholder="No Validasi" name="nomervalidasi">
                    </div>
                    
                    <div class="form-group">
                      
                      <input type="text" class="form-control" placeholder="No KTP" name="nomerktp">
                    </div>

                    <div class="form-group">
                      
                      <input type="text" class="form-control" placeholder="Tempat Tanggal Lahir" name="ttl">
                    </div>

                    <div class="form-group">
                      
                      <input type="text" class="form-control" placeholder="Nama Ayah Kandung" name="namaayah">
                    </div>

                    <div class="form-group">
                      
                      <input type="text" class="form-control" placeholder="Umur" name="umur">
                    </div>

                    <div class="form-group">
                      
                      <input type="text" class="form-control" placeholder="Jenis Kelamin" name="jeniskelamin">
                    </div>

                    <div class="form-group">
                      
                      <input type="text" class="form-control" placeholder="Alamat" name="alamat">
                    </div>

                    <div class="form-group">
                      
                      <input type="text" class="form-control" placeholder="Kelurahan" name="kelurahan">
                    </div>

                    <div class="form-group">
                      
                      <input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan">
                    </div>

                    <div class="form-group">
                      
                      <input type="text" class="form-control" placeholder="Kode Pos" name="kodepos">
                    </div>

                    <div class="form-group">
                      
                      <input type="text" class="form-control" placeholder="Kota/Kabupaten" name="kota">
                    </div>

                    <div class="form-group">
                      
                      <input type="text" class="form-control" placeholder="No Hp" name="nohp">
                    </div>

                    <div class="form-group">
                      
                      <input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan">
                    </div>

                    <div class="form-group">
                      
                      <input type="text" class="form-control" placeholder="Status Perkawinan" name="status">
                    </div>

                    <div class="form-group">
                      
                      <input type="text" class="form-control" placeholder="Golongan Darah" name="golongandarah">
                    </div>

                    <div class="form-group">
                      
                      <input type="text" class="form-control" placeholder="Tinggi Badan" name="tinggi">
                    </div>

                    <div class="form-group">
                      
                      <input type="text" class="form-control" placeholder="Berat Badan" name="berat">
                    </div>

                    <div class="form-group">
                      <label>Scan Kartu Keluarga</label>
                      <input type="file" class="form-control-file border" name="kk">
                    </div>
 
                    <div class="form-group">
                      <label>Scan Akta Kelahiran</label>
                      <input type="file" class="form-control-file border" name="akte">
                    </div>
                    
                    <div class="form-group">
                      <label>Upload Foto</label>
                      <input type="file" class="form-control-file border" name="foto">
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Submit</button>
                    
                </form>
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
