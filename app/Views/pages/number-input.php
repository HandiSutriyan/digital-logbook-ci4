<?= $this->extend('layout/template') ?>

<?= $this->section('konten') ?>
<div class="container konten">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center"><?= $riwayat ? $riwayat[0]['alat_merek'].' '.$riwayat[0]['alat_tipe']: 'Cek Riwayat Alat' ?></h1>
            <p class="text-center"><?= $riwayat ?  $riwayat[0]['alat_nama']:'Silakan masukkan nomor peminjaman alat Anda' ?></p>
        </div>
    </div>
    <?php if(!$riwayat): ?>
    <!-- Search Bar -->
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <?php if(session()->getFlashdata('msg')):?>
                <div class="alert alert-danger"><small><?= session()->getFlashdata('msg') ?></small></div>
             <?php endif;?>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="row g-3 align-items-center" action="number/cari" method="post">
                <div class="col-md-2"> </div>   
                <div class="col-md-8">
                    <input type="text" name="kode_pinjam" class="form-control" placeholder="Nomor Peminjaman" aria-label="First name">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>  
        </div>

    </div>
    <?php endif ?>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 text-center my-2">
            <a href="/">Kembali ke Beranda</a>
        </div>
        <div class="col-md-4"></div>
    </div>
    <div class="row">
        <?php if($riwayat): ?>
            <div class="col-md-12">
                <?php foreach($riwayat as $rw):?>
                <div class="card text-dark bg-light mb-3">
                    <div class="card-header">
                            <small><?= $rw['tujuan'] ?></small> <br>
                            <small>(<?= $rw['peminjam'] ?>)</small>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Kondisi Sebelum</h5>
                        <p class="card-text"><?= $rw['kondisi_before'] ?></p>
                        <h5 class="card-title">Kondisi Sesudah</h5>
                        <p class="card-text"><?= $rw['kondisi_after'] ?></p>
                        <h5 class="card-title">Catatan</h5>
                        <p class="card-text"><?= $rw['kondisi_catatan'] ?></p>
                    </div>
                    <div class="card-footer text-muted">
                        <small><?= date_format(date_create($rw['created_at']), 'd/m/Y'); ?></small>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        <?php else: ?>
            <div class="col-md-12 ilustrasi">
                <img class="img-fluid" src="assets/images/cari.jpg">
            </div>
        <?php endif ?>
    </div>
</div>


<?= $this->endSection() ?>