<!DOCTYPE html>
<?php include "header.php";?>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <h3>Tambah Produk</h3>
    <form action="proses_tambah_produk.php" method="post">
        Nama Produk : 
        <input type="text" name="nama_produk" value="" class="form-control">
        Deskripsi : 
        <input type="text" name="deskripsi" value="" class="form-control"> <br>
        Tambah Gambar : 
        <input type="file" name="foto_produk" value="" class="form-control"> <br>
        Harga : 
        <input type="text" name="harga" value="" class="form-control"> <br>
        <input type="Submit" name="simpan" value="Tambah Produk" class="btn btn-primary">   
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>