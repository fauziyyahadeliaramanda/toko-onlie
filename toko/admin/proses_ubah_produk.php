<?php
if($_POST){
    $id_produk=$_POST['id_produk'];
    $nama_produk=$_POST['nama_produk'];
    $deskripsi=$_POST['deskripsi'];
    $harga=$_POST['harga'];

        if(empty($nama_produk)||empty($deskripsi)||empty($harga)){
            echo "<script>alert('Semua data harus diisi!');location.href='ubah_produk.php?id_produk=$id_produk'</script>";
            } else {
            include "koneksi.php";
            $query = "update produk set nama_produk='$nama_produk',deskripsi='$deskripsi',harga='$harga' where id_produk='$id_produk'";
            $update=mysqli_query($conn,$query);
            if($update){
                echo "<script>alert('Sukses update produk');location.href='tampil_produk.php';</script>";
            } else {
                echo "<script>alert('Gagal update produk');location.href='ubah_produk.php?id_produk=".$id_produk."';</script>";


            } 
        }
    }
?>