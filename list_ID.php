<?php
include "function.php";
if (isset($_POST['namaChange'])) {
    $nama   = $_POST["namaChange"];
    $qID    = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE nama = '$nama'");
    $nID    = $qID->num_rows;
    $dID    = mysqli_fetch_assoc($qID);
?>

<?php if ($nID > 0) { ?>
<div class="form-group mb-3">
    <div class="form-text mb-2">
        ID Pengurus
    </div>
    <input type="text" class="form-control" value="<?= $dID["id"]; ?>" readonly="">
</div>
<?php } ?>


<?php } ?>