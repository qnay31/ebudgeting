<main id="main" class="main">
    <div class="pagetitle">
        <h1>Database</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <li class="breadcrumb-item">Database</li>
                <li class="breadcrumb-item active">Global</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns pengajuan-->
            <div class="col-lg-12" id="form-pengajuan">


                <!-- Laporan  -->
                <div class="col-12">
                    <?php if ($id_global == "") { ?>
                    <?php if ($_SESSION["id_pengurus"] == "kepala_pengajuan") { ?>
                    <?php } else { ?>
                    <div class="card">
                        <?php include '../models/database/global/pemasukan.php'; ?>
                    </div>
                    <?php } ?>

                    <div class="card">
                        <?php include '../models/database/global/pengeluaran.php'; ?>
                    </div>

                    <?php } else { ?>
                    <div class="card">
                        <?php include '../models/database/global/detail.php'; ?>
                    </div>

                    <?php } ?>

                    <div class="card">
                        <?php include '../models/database/global/data-detail.php'; ?>
                    </div>
                </div><!-- End Laporan  -->
            </div><!-- End Left side columns -->
        </div>
    </section>
</main><!-- End #main -->