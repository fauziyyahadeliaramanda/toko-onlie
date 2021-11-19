<div class="row">
    <?php
    include "header.php";
    include "koneksi.php";
    $qry_produk=mysqli_query($conn,"select * from produk");
    while($dt_produk=mysqli_fetch_array($qry_produk)){
        ?>
        <div class="col-md-3">
            <p>
            <div class="card">
                <img src="rasa pink.jpg" class="card-img-top">
                <div class="card-body">
                    <b><p class="card-text"><?=$dt_produk['nama_produk']?></p></b>
                    <p class="card-text"><?=$dt_produk['deskripsi']?></p>
                    <p class="card-text"><?=$dt_produk['harga']?></p>
                    <a href="detail_produk.php?id_produk=<?$dt_produk['id_produk']?>" class="btn btn-primary">BELI</a>
                </div>
            </div>
            </p>
        </div>
        <?php
    }
    ?>
</div>