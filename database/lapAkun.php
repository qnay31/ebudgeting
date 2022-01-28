<?php

if ($_SESSION["id_pengurus"] == "manager_facebook" || $_SESSION["id_pengurus"] == "manager_instagram") {
    if ($_SESSION["username"] == "admin_facebook") {
        $q  = mysqli_query($conn, "SELECT * FROM laporan_media WHERE id_pengurus = 'facebook_depok' ORDER BY pemegang ASC, `tgl_laporan` DESC");

    } else {
        $q  = mysqli_query($conn, "SELECT * FROM laporan_media WHERE id_pengurus = '$_SESSION[username]' ORDER BY pemegang ASC, `tgl_laporan` DESC");
    }

} elseif ($_SESSION["id_pengurus"] == "ketua_yayasan") {
    $q  = mysqli_query($conn, "SELECT * FROM laporan_media ORDER BY pemegang ASC, `tgl_laporan` DESC");

} elseif ($_SESSION["id_pengurus"] == "kepala_cabang") {
    $q  = mysqli_query($conn, "SELECT * FROM laporan_media WHERE id_pengurus = 'facebook_bogor' ORDER BY pemegang ASC, `tgl_laporan` DESC");

} else {
    $q  = mysqli_query($conn, "SELECT * FROM laporan_media WHERE pemegang = '$_SESSION[nama]' ORDER BY `tgl_laporan` DESC");
}


?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Database</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <li class="breadcrumb-item">Database</li>
                <li class="breadcrumb-item active">Laporan Akun</li>

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
                        <?php include '../models/database/pemasukan/sub-lapAkun.php'; ?>
                    </div>
                </div><!-- End Laporan  -->
            </div><!-- End Left side columns -->
        </div>
    </section>
</main><!-- End #main -->