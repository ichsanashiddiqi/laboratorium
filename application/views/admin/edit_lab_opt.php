<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                    </div>
                    <?php

    foreach ($lab_opt as $lab) {
    ?>
                    <form class="user" method="post" action="<?= base_url('lab_opt_controller/edit'); ?>">
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Jenis Layanan</label>

                            <textarea class="form-control" id="layanan" name="layanan"><?= $lab['layanan']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Satuan</label>
                            <input type="text" class="form-control" id="id" name="id" value="<?= $lab['id']; ?>" hidden>
                            <input type="text" class="form-control" id="satuan" name="satuan" value="<?= $lab['satuan']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Satuan dalam Gram</label>
                            <input type="number" class="form-control" id="berat" name="berat" value="<?= $lab['berat']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Tarif(dengan Rp. 000.000,00)</label>
                            <input type="text" class="form-control" id="tarif" name="tarif" value="<?= $lab['tarif']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Tarif(hanya angka)</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div>

                                <input type="number" class="form-control" id="harga" name="harga" placeholder="Tarif" value="<?= $lab['harga']; ?>"">                 
                            </div>
                        </div>
                        <div class=" form-group">
                                <label for="message-text" class="col-form-label">Lama Penyelesaian</label>
                                <input type="text" class="form-control" id="waktu" name="waktu" value="<?= $lab['waktu']; ?>"">
                        </div>
                        <button type=" submit" class="btn btn-primary">Save changes</button>

                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>