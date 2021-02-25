<?= $this->extend('layout/admin-template') ?>

<?= $this->section('content') ?>

    <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <a href="/pinjam/pilihalat">
                            <div class="card">
                                <div class="content">
                                    <hr>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <img class="img-responsive" src="assets/images/teknisi.jpg" style="max-width: 250px;">
                                                <h5>Peminjaman</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="/pinjam/kembalialat">
                        <div class="card">
                            <div class="content">
                                <hr>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <img class="img-responsive" src="assets/images/admin.jpg" style="max-width: 250px;">
                                            <h5>Pengembalian</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
    </div>

<?= $this->endSection() ?>


