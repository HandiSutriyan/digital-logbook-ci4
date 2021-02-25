<?= $this->extend('layout/admin-template') ?>

<?= $this->section('content') ?>

    <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Logbook Peralatan Kalibrasi</h4>
                                <p class="category">Pusat Pengolahan Data Data Peralatan Kalibrasi</p>
                            </div>
                            <div class="content">
                                <hr>
                                <div class="container-fluid">
                                <div class="row">
                                        <div class="col-md-4">
                                            <h5>Total Peralatan</h5>
                                            <h2 class="title"><?= $totalDataAlat ?></h2>
                                            <span class="category">unit</span>
                                        </div>
                                        <div class="col-md-4">
                                            <h5>Peminjaman</h5>
                                            <h2 class="title"><?= $totalDataRiwayat ?></h2>
                                             <span class="category">transaksi</span>
                                        </div>
                                        <div class="col-md-4">
                                            <h5>Jenis Alat</h5>
                                            <h2 class="title"><?= $totalDataRole ?></h2>
                                             <span class="category">kategori</span>
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


