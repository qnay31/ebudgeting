<div class="card-body">
    <h5 class="card-title">PERIODE</h5>
    <ul class="nav nav-tabs nav-tabs-bordered">
        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "01") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_ebudget=globalData&id_periode=01">Januari</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_ebudget=globalData&id_periode=01">Januari</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "02") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_ebudget=globalData&id_periode=02">Februari</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_ebudget=globalData&id_periode=02">Februari</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "03") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_ebudget=globalData&id_periode=03">Maret</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_ebudget=globalData&id_periode=03">Maret</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "04") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_ebudget=globalData&id_periode=04">April</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_ebudget=globalData&id_periode=04">April</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "05") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_ebudget=globalData&id_periode=05">Mei</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_ebudget=globalData&id_periode=05">Mei</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "06") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_ebudget=globalData&id_periode=06">Juni</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_ebudget=globalData&id_periode=06">Juni</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "07") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_ebudget=globalData&id_periode=07">Juli</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_ebudget=globalData&id_periode=07">Juli</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "08") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_ebudget=globalData&id_periode=08">Agustus</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_ebudget=globalData&id_periode=08">Agustus</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "09") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_ebudget=globalData&id_periode=09">September</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_ebudget=globalData&id_periode=09">September</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "10") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_ebudget=globalData&id_periode=10">Oktober</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_ebudget=globalData&id_periode=10">Oktober</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "11") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_ebudget=globalData&id_periode=11">November</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_ebudget=globalData&id_periode=11">November</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "12") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_ebudget=globalData&id_periode=12">Desember</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_ebudget=globalData&id_periode=12">Desember</a>

            <?php } ?>
        </li>
    </ul>
</div>