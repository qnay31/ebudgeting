<div class="card-body">
    <?php if ($id_management == "") { ?>
    <h5 class="card-title">FORM PEMASUKAN</h5>
    <?php } else { ?>
    <h5 class="card-title">FORM CASHBACK</h5>
    <?php } ?>

</div>

<div id="form">
    <form action="" method="post" enctype="multipart/form-data" onsubmit="return validasi_income(this)">
        <input type="hidden" name="link" value="<?= $_SESSION["id_pengurus"] ?>">
        <div class="mb-3">
            <?php if ($id_management == "") { ?>
            <div class="form-text mb-2">
                Kategori Income
            </div>
            <input type="text" name="kategori" class="form-control" value="Media Sosial" readonly>
            <div class="form-text mb-2">
                Gedung
            </div>
            <select class="form-select" aria-label="Default select example" name="gedung" required
                oninvalid="this.setCustomValidity('Pilih salah satu income')" oninput="this.setCustomValidity('')"
                id="incomeHumas">
                <option selected value="">Pilih Salah Satu Income</option>
                <option value="Fecebook Depok">Income Fecebook Depok</option>
                <option value="Facebook Bogor">Income Facebook Bogor</option>
                <option value="Instagram">Income Instagram</option>
                <option value="Tanpa Resi">Income Tanpa Resi</option>
            </select>
            <?php } else { ?>
            <div class="form-text mb-2">
                Kategori
            </div>
            <input type="text" name="kategori" class="form-control" value="Cashback Uang Cash DLL" readonly>
            <?php } ?>

        </div>

        <?php if ($id_management == "") { ?>
        <div class="mb-3">
            <div id="disabledSelect" class="form-text mb-2">
                Tanggal Pemasukan
            </div>
            <input type="date" class="form-control" name="tanggal">
        </div>
        <?php } else { ?>
        <div class="mb-3">
            <div id="disabledSelect" class="form-text mb-2">
                Tanggal Cashback
            </div>
            <input type="date" class="form-control" name="tanggal">
        </div>

        <div class="mb-3">
            <div id="disabledSelect" class="form-text mb-2">
                Keterangan
            </div>
            <input type="text" class="form-control" name="deskripsi" placeholder="Contoh: cashback lainnya" id="alpabet"
                style="text-transform: capitalize;" autocomplete="off" required
                oninvalid="this.setCustomValidity('Keterangan tidak boleh kosong')"
                oninput="this.setCustomValidity('')">
        </div>

        <?php } ?>

        <?php if ($id_management == "") { ?>
        <div id=" disabledSelect" class="form-text mb-2">
            Jumlah Income
        </div>
        <?php } else { ?>
        <div id="disabledSelect" class="form-text mb-2">
            Jumlah Cashback
        </div>
        <?php } ?>

        <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1"><b>Rp</b></span>
            <input type="text" class="form-control" name="income" id="rupiah" maxlength="11" placeholder="100.000"
                onkeypress="return hanyaAngka(event)" autocomplete="off" required
                oninvalid="this.setCustomValidity('Harap diisi terlebih dahulu')" oninput="this.setCustomValidity('')">
        </div>

        <div class="button">
            <input type="submit" name="input" class="btn btn-primary w-100" value="Laporkan">
        </div>
    </form>
</div>