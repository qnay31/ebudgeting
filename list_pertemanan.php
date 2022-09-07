<?php
error_reporting(0);
include "function.php";
if (isset($_POST['akun'])) {
    $akun = $_POST["akun"];
    $query      = mysqli_query($conn, "SELECT * FROM laporan_media WHERE nama_akun = '$akun' ORDER BY tgl_laporan DESC");
    $data       = mysqli_fetch_assoc($query);
    $teman      = $data["jumlahTeman"];
?>

<?php if ($akun == "") { ?>

<?php } else { ?>
<?php if ($teman == "") { ?>
<div class="input-group mb-2">
    <span class="input-group-text" id="basic-addon1"><b>Teman Saat Ini</b></span>
    <input type="text" class="form-control admin_rp" name="dataTeman" maxlength="11" placeholder="Total Teman"
        onkeypress="return hanyaAngka(event)" autocomplete="off" required
        oninvalid="this.setCustomValidity('Jumlah Teman harus diisi')" oninput="this.setCustomValidity('')">
</div>

<script>
$(".keteranganTeman").hide();
$(".keteranganTeman select").prop('disabled', true);
</script>

<?php } else { ?>
<div class="input-group mb-2">
    <span class="input-group-text" id="basic-addon1"><b>Teman Sebelumnya</b></span>
    <input type="text" class="form-control admin_rp" name="dataTeman" value="<?= $teman; ?>" readonly>
</div>

<div class="input-group mb-2">
    <span class="input-group-text" id="basic-addon1"><b>Teman Saat Ini</b></span>
    <input type="text" class="form-control admin_rp" name="dataTemanBaru" maxlength="11" placeholder="Total Teman"
        onkeypress="return hanyaAngka(event)" autocomplete="off" required
        oninvalid="this.setCustomValidity('Jumlah Teman harus diisi')" oninput="this.setCustomValidity('')">
</div>
<script>
$(".keteranganTeman").show();
$(".keteranganTeman select").prop('disabled', false);
</script>
<?php } ?>
<?php } ?>


<?php } ?>