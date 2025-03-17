<?php
require_once 'candiController.php';

$candi = new Candi();
$id = $_GET['id'];
$data = $candi->getById($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nama = $_POST['nama'];
    $lokasi = $_POST['lokasi'];
    $deskripsi = $_POST['deskripsi'];

}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Candi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4 mt-4">Detail Candi</h1>
    
<div class="card" style="height: 485px;">
    <div class="card-body">
    <form method="post"> 

    <div class="mb-3">    
    <input type="hidden" class="form-control" name="id" value="<?= $data['id']; ?>">
    <label for="exampleFormControlInput1" class="form-label">Nama </label>
        <input type="text" class="form-control" name="nama" value= "<?= $data['nama']; ?>" autocomplete="off" readonly>
      </div>
    <div class="mb-3">    
        <label for="exampleFormControlInput1" class="form-label">Lokasi </label>
        <input type="text" class="form-control"  name="lokasi" value= "<?= $data['lokasi']; ?>" autocomplete="off" readonly>
      </div>
    
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
        <div class="form-floating">
          <textarea class="form-control"  name="deskripsi" value= "<?= $data['deskripsi']; ?>" autocomplete="off" id="floatingTextarea2" style="height: 100px" readonly><?= $data['deskripsi']; ?> </textarea>
        </div>
      </div>
    
      <a href="index.php" class="btn btn-primary">Kembali</a>
    
    </form>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>