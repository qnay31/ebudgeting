<?php
if ($_SESSION["id_pengurus"] == "ketua_yayasan") {

    $q  = mysqli_query($conn, "SELECT * FROM 2022_humas WHERE laporan = 'Terverifikasi' ORDER BY `tgl_pengajuan` DESC");

} else {
    $q  = mysqli_query($conn, "SELECT * FROM 2022_humas WHERE `cabang` = '$_SESSION[cabang]' AND posisi = '$_SESSION[posisi]' AND laporan = 'Terverifikasi' ORDER BY `tgl_pengajuan` DESC");
    $s = $q->num_rows;
}
// die(var_dump($s));
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Database</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <li class="breadcrumb-item">Database</li>
                <li class="breadcrumb-item active">Humas</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns pengajuan-->
            <div class="col-lg-12" id="form-pengajuan">

                <!-- Laporan  -->
                <div class="col-12">
                    <div class="card">
                        <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan") { ?>
                        <?php include '../models/database/humas/sub-humas.php'; ?>

                        <?php } else { ?>
                        <?php include '../models/database/humas/sub-humas.php'; ?>
                        <?php } ?>
                    </div>
                </div><!-- End Laporan  -->
            </div><!-- End Left side columns -->
        </div>
    </section>
</main><!-- End #main -->