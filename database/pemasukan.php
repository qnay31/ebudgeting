<?php
    if ($_GET["id_income"] == "") {
        $q  = mysqli_query($conn, "SELECT * FROM 2022_income WHERE status = 'Terverifikasi' ORDER BY `tgl_pemasukan` DESC");
    } else {
        $q  = mysqli_query($conn, "SELECT * FROM 2022_incometanparesi WHERE status = 'Terverifikasi' ORDER BY `tgl_pemasukan` DESC");
    }
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Database</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <li class="breadcrumb-item">Database</li>
                <li class="breadcrumb-item active">Pemasukan Media Sosial</li>
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
                        <?php include '../models/database/pemasukan/sub-pemasukan.php'; ?>
                    </div>
                </div><!-- End Laporan  -->
            </div><!-- End Left side columns -->
        </div>
    </section>
</main><!-- End #main -->