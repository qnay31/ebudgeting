<?php

if ($_SESSION["id_pengurus"] == "facebook_depok" || $_SESSION["id_pengurus"] == "facebook_bogor" || $_SESSION["id_pengurus"] == "instagram") {
    $q  = mysqli_query($conn, "SELECT * FROM income_media WHERE pemegang = '$nama' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC");

} elseif ($_SESSION["id_pengurus"] == "kepala_cabang") {
    $q = mysqli_query($conn, "SELECT * FROM income_media WHERE cabang = '$_SESSION[cabang]' AND id_pengurus = 'facebook_bogor' AND status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC");
    
} elseif ($_SESSION["id_pengurus"] == "manager_facebook" || $_SESSION["id_pengurus"] == "manager_instagram") {
    if ($_SESSION["username"] == "admin_facebook") {
        $q = mysqli_query($conn, "SELECT * FROM income_media WHERE cabang = '$_SESSION[cabang]' AND id_pengurus = 'facebook_depok' AND status = 'OK' ORDER BY pemegang ASC,`tanggal_tf` DESC");

    } else {
        $q = mysqli_query($conn, "SELECT * FROM income_media WHERE cabang = '$_SESSION[cabang]' AND id_pengurus = '$_SESSION[username]' AND status = 'OK' ORDER BY pemegang ASC,`tanggal_tf` DESC");
    }

} else {
    $q  = mysqli_query($conn, "SELECT * FROM income_media WHERE status = 'OK' ORDER BY pemegang ASC, `tanggal_tf` DESC");
}



?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Database</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <li class="breadcrumb-item">Database</li>
                <li class="breadcrumb-item active">Pemasukan Harian Media Sosial</li>

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
                        <?php include '../models/database/pemasukan/sub-harianPemasukan.php'; ?>
                    </div>
                </div><!-- End Laporan  -->
            </div><!-- End Left side columns -->
        </div>
    </section>
</main><!-- End #main -->