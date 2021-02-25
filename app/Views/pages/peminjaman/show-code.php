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
                                            <h2 class="title mb-15"><?= $data_pinjam['kode_pinjam'] ?></h2>
                                            <form class="my-20">
                                                <input class="form-control-plaintext d-print-none" id="kode_pinjam" type="text" value="<?= $data_pinjam['kode_pinjam'] ?>" readonly style="display:none">
                                            </form>
                                        </div>
                                        <div class="col-md-4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center" style="padding:20px;">
                                    <button class="btn btn-primary" onclick="copyClip();">Salin Kode</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

<?= $this->endSection() ?>


