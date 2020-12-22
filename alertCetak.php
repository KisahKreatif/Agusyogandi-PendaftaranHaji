<!DOCTYPE html>
<html lang="en">
<head>
  <title>WEB PENDAFTARAN HAJI | Alert Cetak</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-body">
                
            <?php 
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "nodata"){
                    echo "Nomer KTP tidak di temukan!";
                }else if($_GET['pesan'] == "data"){
                    echo "data ktp ditemukan";
                }
            }
            ?>
            </div>
            <div class="modal-footer"><a href="cetakbukti.php">
                <button type="button" class="btn btn-success">Kembali</button></a>
            </div>
        </div>

    </div>
</div>

<script>
$('#myModal').modal('show');
</script>
</body>
</html>
