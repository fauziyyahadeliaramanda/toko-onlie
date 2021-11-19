<?php
if($_POST){
    $id_petugas=$_POST['id_petugas'];
    $nama_petugas=$_POST['nama_petugas'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $level=$_POST['level'];

        if(empty($nama_petugas)||empty($username)||empty($password)||empty($level)){
            echo "<script>alert('Semua data harus diisi!');location.href='ubah_petugas.php?id_petugas=$id_petugas'</script>";
            } else {
            include "koneksi.php";
            $query = "update petugas set nama_petugas='$nama_petugas',username='$username',password='$password',level='$level' where id_petugas='$id_petugas'";
            $update=mysqli_query($conn,$query);
            if($update){
                echo "<script>alert('Sukses update petugas');location.href='tampil_petugas.php';</script>";
            } else {
                echo "<script>alert('Gagal update petugas');location.href='ubah_petugas.php?id_petugas=".$id_petugas."';</script>";


            } 
        }
    }
?>