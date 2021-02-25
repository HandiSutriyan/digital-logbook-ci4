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
                                <p class="category"><?= $data_pinjam['tujuan']?></p>
                            </div>
                            <div class="content">
                                <hr>
                                <div class="container-fluid">
                                <div class="row">
                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <h5>Kode Peminjaman</h5>
                                            <form>
                                                <input class="form-control-plaintext" id="kode_pinjam" type="text" value="<?= $data_pinjam['kode_pinjam'] ?>" readonly>
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


