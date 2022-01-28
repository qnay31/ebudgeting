<?php
if ($_GET["id_database"] == "database_program") {
    if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "kepala_pengajuan" || $_SESSION["id_pengurus"] == "management_keuangan") {

        $q  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE laporan = 'Terverifikasi' ORDER BY `tgl_pengajuan` DESC");
    
    } else {
        $q  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE `cabang` = '$_SESSION[cabang]' AND laporan = 'Terverifikasi' ORDER BY `tgl_pengajuan` DESC");
        $s = $q->num_rows; 
    }
} else {
    if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "kepala_pengajuan" || $_SESSION["id_pengurus"] == "management_keuangan") {

        $q  = mysqli_query($conn, "SELECT * FROM 2022_paudqu WHERE laporan = 'Terverifikasi' ORDER BY `tgl_pengajuan` DESC");
    
    } else {
        $q  = mysqli_query($conn, "SELECT * FROM 2022_paudqu WHERE `cabang` = '$_SESSION[cabang]' AND laporan = 'Terverifikasi' ORDER BY `tgl_pengajuan` DESC");
        $s = $q->num_rows; 
    }
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

                <?php if ($_GET["id_database"] == "database_program") { ?>
                <li class="breadcrumb-item active">Program</li>

                <?php } else { ?>
                <li class="breadcrumb-item active">PaudQu El-ZamZam</li>
                <?php } ?>

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
                        <?php include '../models/database/program/sub-program.php'; ?>
                    </div>
                </div><!-- End Laporan  -->
            </div><!-- End Left side columns -->
        </div>
    </section>
</main><!-- End #main -->