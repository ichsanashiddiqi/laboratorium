<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Laboratorium OPT</h1>
    </div>

    <!-- Content Row -->
    <a type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#tambahModal">Tambah Layanan Laboratorium OPT</a>

    <hr>
    <div class="row">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Laboratorium OPT</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Layanan</th>
                                <th>Satuan</th>
                                <th>Kebutuhan Sampel</th>
                                <th>Tarif per Sampel</th>
                                <th>Tarif dalam Angka</th>
                                <th>Lama Penyelesaian</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($dat_lab_opt as $benih) {
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td>
                                    <a href="<?php echo base_url('admin/edit_lab_opt/' . $benih->id) ?>"><i class="fas fa-edit" style="color: chartreuse;"></i></a>
                                    <a href="<?php echo base_url('lab_opt_controller/hapus/' . $benih->id) ?>"><i class="fas fa-trash-alt" style="color: red;"></i></a>
                                </td>
                                <td><?php echo $benih->layanan ?></td>
                                <td><?php echo $benih->satuan ?></td>
                                <td><?php echo $benih->berat ?></td>
                                <td><?php echo $benih->tarif ?></td>
                                <td><?php echo $benih->harga ?></td>
                                <td><?php echo $benih->waktu ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url('lab_opt_controller/tambah'); ?>">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Jenis Layanan</label>
                        <textarea class="form-control" id="layanan" name="layanan"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Satuan</label>
                        <input type="text" class="form-control" id="satuan" name="satuan">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Satuan dalam Gram</label>
                        <input type="text" class="form-control" id="berat" name="berat">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Tarif(dengan Rp. 000.000,00)</label>
                        <input type="text" class="form-control" id="tarif" name="tarif">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Tarif(hanya angka)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" class="form-control" id="harga" name="harga" placeholder="Tarif">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Lama Penyelesaian</label>
                        <input type="text" class="form-control" id="waktu" name="waktu">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>