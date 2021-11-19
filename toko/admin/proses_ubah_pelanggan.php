<?php
if($_POST){
    $id_pelanggan=$_POST['id_pelanggan'];
    $nama_pelanggan=$_POST['nama_pelanggan'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];

        if(empty($nama_pelanggan)||empty($alamat)||empty($telp)){
            echo "<script>alert('Semua data harus diisi!');location.href='ubah_pelanggan.php?id_pelanggan=$id_pelanggan'</script>";
            } else {
            include "koneksi.php";
            $query = "update pelanggan set nama_pelanggan='$nama_pelanggan',alamat='$alamat',telp='$telp' where id_pelanggan='$id_pelanggan'";
            $update=mysqli_query($conn,$query);
            if($update){
                echo "<script>alert('Sukses update pelanggan');location.href='tampil_pelanggan.php';</script>";
            } else {
                echo "<script>alert('Gagal update pelanggan');location.href='ubah_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";


            } 
        }
    }
?>