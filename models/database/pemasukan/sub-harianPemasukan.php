<div class="card-body">
    <h5 class="card-title">DATABASE PEMASUKAN GLOBAL</h5>

    <div class="table-responsive">
        <h5 class="card-title text-center">Laporan Pemasukan Global</h5>
        <table id="tabel-data_databaseIncomeMedia" class="table table-bordered">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Dipegang Oleh</th>
                    <th scope="col">Income</th>
                    <th scope="col">Nama Akun</th>
                    <th scope="col">Cabang</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Nama Donatur</th>
                    <th scope="col">Tanggal Transfer</th>
                    <th scope="col">Bank</th>
                    <th scope="col">Jumlah Income</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    while ($r = $q->fetch_assoc()) {
                        $convert   = convertDateDBtoIndo($r['tanggal_tf']);
                        $bulan     = substr($convert, 2);
                ?>

                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td style="text-align: center;"><?= ucwords($r['pemegang']) ?></td>
                    <td style="text-align: center;">
                        <?php if ($r["id_pengurus"] == "instagram") { ?>
                        Income Instagram
                        <?php } elseif ($r["id_pengurus"] == "facebook_depok") { ?>
                        Income Fecebook Depok
                        <?php } else { ?>
                        Income Facebook Bogor
                        <?php } ?>

                    </td>
                    <td style="text-align: center;"><?= ucwords($r['nama_akun']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['cabang']) ?></td>
                    <td style="text-align: center;"><?= $bulan ?></td>
                    <td><?= ucwords($r['nama_donatur']) ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tanggal_tf'])); ?></td>
                    <td style="text-align: center;"><?= ucwords($r['bank']) ?></td>
                    <td><?= number_format($r['jumlah_tf']) ?></td>
                </tr>

                <?php } ?>
            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="9">Total</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>

    </div>
</div>