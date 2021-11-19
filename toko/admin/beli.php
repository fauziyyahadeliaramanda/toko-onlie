<?php
include "header.php";
?>
</br>
<div class = "row">
    <?php
    include "koneksi.php";
    $qry_produk = mysqli_query($conn, "select * from produk");
    while ($dt_produk = mysqli_fetch_array($qry_produk)){
        ?>
        <div class = "col-md-3">
            <div class = "card">
                <?php
                if (isset($dt_produk['foto']) && $dt_produk['foto'] != ''){
                ?>
                    <img src="<?php echo $dt_produk['foto'];?>"class="card-img-top">
                    <?php /* ?><img src="assets/foto_produk/<?=$dt_produk['foto']?>"> <?php */ ?>
                <?php } else {?>
                    <img src="" alt="">
                <?php } ?>
                <div class="card-body" align="center">
                    <h4 class="card-title"><?php echo $dt_produk['nama_produk'];?></h4>
                </br>
                    <h5 class="card-title">Rp. <?php echo $dt_produk['harga'];?></h5>
                </br>
                    <a href="tampil_produk.php?id=<?php echo $dt_produk['id'];?>" class = "btn btn-primary">UBAH</a>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<?php
?>