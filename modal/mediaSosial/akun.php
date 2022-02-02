<!-- Modal -->
<div class="modal fade" id="akun_<?= $r["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Akun</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="form">
                    <form action="" method="post" onsubmit="return validasi_input(this)" class="user">
                        <div class="input-group mb-3">
                            <input type="hidden" name="id" value="<?= $r["id"]  ?>">
                            <input type="hidden" name="link" value="<?= $r["id_pengurus"] ?>">
                            <input type="hidden" name="posisi" value="<?= $r["posisi"] ?>">
                        </div>

                        <div class="form-group mb-3">
                            <div class="form-text mb-2">
                                Nama
                            </div>
                            <input type="text" class="form-control" name="nama" value="<?= $r["pemegang"] ?>" readonly>
                        </div>

                        <div class="form-group mb-3">
                            <div class="form-text mb-2">
                                Nama Akun
                            </div>
                            <input type="text" class="form-control" name="namaAkun" value="<?= $r["nama_akun"] ?>"
                                readonly>
                        </div>

                        <div class="form-group mb-3">
                            <div class="form-text mb-2">
                                Nomor ID
                            </div>
                            <input type="text" class="form-control" name="oldId" value="<?= $r["nomor_id"] ?>" readonly>
                        </div>

                        <div class="form-group mb-3">
                            <div class="form-text mb-2">
                                Change Name
                            </div>
                            <input type="text" class="form-control" name="namaChange" placeholder="Ubah Nama" required>
                        </div>

                        <div class="form-group mb-3">
                            <div class="form-text mb-2">
                                Change ID
                            </div>
                            <input type="text" class="form-control admin_rp" name="changeID" placeholder="Ubah ID"
                                onkeypress="return hanyaAngka(event)" required>
                        </div>

                        <div class="button">
                            <input type="submit" name="changeName" class="btn btn-primary w-100" value="Ubah Data">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>