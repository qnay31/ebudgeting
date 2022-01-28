<div class="card-body">
    <h5 class="card-title">FORM VERIFIKASI</h5>
    <div class="table-responsive">
        <div class="text-center">
            <label for="">
                <b style="color: black;">Tabel Verifikasi Pemasukan Media Sosial</b>
                <hr>
            </label>
        </div>

        <table id="tabel-data_verifMedia" class="table table-bordered">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Dilaporkan Oleh</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Income</th>
                    <th scope="col">Tgl Pemasukan</th>
                    <th scope="col">Status Admin</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Income</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    while ($r = $q->fetch_assoc()) {
                    $bln       = substr($r['tgl_pemasukan'], 5,-3);
                ?>

                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td style="text-align: center;"><?= ucwords($r['posisi']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['kategori']) ?></td>
                    <td>Income <?= ucwords($r['gedung']) ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_pemasukan'])); ?></td>
                    <td style="text-align: center;"><b><?= ucwords($r['status']) ?></b></td>
                    <td style=" text-align: center;">
                        <a class="btn btn-primary"
                            href="../admin/<?= $_SESSION["username"] ?>.php?id_forms=edit_pemasukan&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin anggaran ini mau diedit?!')">Edit</a> ||
                        <a class="btn btn-danger"
                            href="../models/pemasukan/hapus_pemasukan.php?id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin anggaran ini mau dihapus?!')">Hapus</a>
                    </td>
                    <td>Rp. <?= number_format($r['income'],0,"." , ".") ?></td>
                </tr>

                <?php } ?>
            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="7">Total</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
        
        <!-- Non Resi -->
        <div class="text-center pt-3">
            <label for="">
                <b style="color: black;">Tabel Verifikasi Pemasukan Non Resi</b>
                <hr>
            </label>
        </div>
        <table id="tabel-data_verifMedia2" class="table table-bordered">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Dilaporkan Oleh</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Income</th>
                    <th scope="col">Tgl Pemasukan</th>
                    <th scope="col">Status Admin</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Income</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    while ($r = $k->fetch_assoc()) {
                    $bln       = substr($r['tgl_pemasukan'], 5,-3);
                ?>

                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td style="text-align: center;"><?= ucwords($r['posisi']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['kategori']) ?></td>
                    <td>Income <?= ucwords($r['gedung']) ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_pemasukan'])); ?></td>
                    <td style="text-align: center;"><b><?= ucwords($r['status']) ?></b></td>
                    <td style=" text-align: center;">
                        <a class="btn btn-primary"
                            href="../admin/<?= $_SESSION["username"] ?>.php?id_forms=edit_pemasukan&incomeId=nonResi&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin pemasukan ini mau diedit?!')">Edit</a> ||
                        <a class="btn btn-danger"
                            href="../models/pemasukan/hapus_pemasukan.php?incomeId=nonResi&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin pemasukan ini mau dihapus?!')">Hapus</a>
                    </td>
                    <td>Rp. <?= number_format($r['income'],0,"." , ".") ?></td>
                </tr>

                <?php } ?>
            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="7">Total</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>