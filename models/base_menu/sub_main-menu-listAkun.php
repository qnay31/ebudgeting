<?php 
if ($_SESSION["username"] == "admin_facebook" || $_SESSION["username"] == "sekretaris_facebook") {
    $pengurus   = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE id_pengurus = 'facebook_depok' ORDER BY `nama` ASC");
    
} else {
    $pengurus   = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE id_pengurus = '$_SESSION[username]' ORDER BY `nama` ASC");
}

?>
<!-- Card -->
<div class="col-xxl-12">
    <div class="card info-card customers-card">
        <div class="card-body">
            <h5 class="card-title">Data Pengurus & Akun</span></h5>
            <div class="row">
                <!-- Card -->
                <?php 
                $no = 1;
                while ($data = $pengurus -> fetch_assoc()) { ?>
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card customers-card">
                        <span class="card1">
                            <div class="card-body">
                                <h5 class="card-title"><?= ucwords($data["nama"]) ?>
                                </h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person"></i>
                                    </div>
                                    <div class="ps-3">
                                        <?php
                                        $query   = mysqli_query($conn, "SELECT * FROM data_akun WHERE pemegang = '$data[nama]' ORDER BY `nama_akun` ASC ");
                                        ?>
                                        <?php
                                        $no = 1;
                                        while ($data2 = mysqli_fetch_array($query)) { ?>
                                        <span class="akun"><b>Akun <?= $no++ ?>:</b>
                                            <a
                                                href="<?= $_SESSION["username"] ?>.php?id_accountKey=<?= $data2["nomor_id"] ?>&id_akun=<?= $data2["nama_akun"] ?>"><?= ucwords($data2["nama_akun"]) ?>
                                            </a>
                                        </span>
                                        <br>

                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="go-corner">
                                <div class="go-arrow">
                                    →
                                </div>
                            </div>
                        </span>
                    </div>
                </div>
                <?php } ?>
                <!-- End Card -->
            </div>
        </div>
    </div>
</div><!-- End Card -->