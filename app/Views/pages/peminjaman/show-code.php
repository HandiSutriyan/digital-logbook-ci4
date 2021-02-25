<?= $this->extend('layout/admin-template') ?>

<?= $this->section('content') ?>

    <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="header text-center">
                            <?php if(session()->getFlashdata('pesan')): ?>
                                <div class="alert alert-success " role="alert">
                                    <h4 class="title">Peminjaman Berhasil</h4>
                                </div>
                            <?php endif; ?>
                                <p class="category"><?= $data_alat['alat_nama'].' '.$data_alat['alat_tipe'] ?></p>
                            </div>
                            <div class="content">
                                <hr>
                                <div class="container-fluid">
                                <div class="row">
                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <h5>Kode Peminjaman</h5>
                                            <h2 class="title"><?= $data_pinjam['kode_pinjam'] ?></h2>
                                             <span class="category">PTK</span>
                                        </div>
                                        <div class="col-md-4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

<?= $this->endSection() ?>


