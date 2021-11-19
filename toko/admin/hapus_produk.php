<?php
if($_GET['id_produk']){
    include "Koneksi.php";
    $qry_hapus=mysqli_query($conn,"delete from produk where id_produk='".$_GET['id_produk']."'");
    if($qry_hapus){
        echo "<script>alert('Sukses hapus produk');location.href='tampil_produk.php';</script>";
    }else{
        echo "<script>alert('Gagal Hapus produk'); locstion.href='tampil_produk.php';</script>";
}
}
?>