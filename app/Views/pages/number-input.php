<?= $this->extend('layout/template') ?>

<?= $this->section('konten') ?>
<div class="container konten">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center"><?= $riwayat ? $riwayat[0]['tujuan']: 'Cek Riwayat Alat' ?></h1>
            <p class="text-center"><?= $riwayat ?  $riwayat[0]['peminjam']:'Silakan masukkan nomor peminjaman alat Anda' ?></p>
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
    
    <!-- Accordion -->
    <div class="row">
        <!-- start-->
        <div class="accordion" id="accordionExample">
            <?php foreach($riwayat as $rw): ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <?= $rw['alat_nama'] ?> Tipe: <?= $rw['alat_tipe'] ?>
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                       
                        <h5 class="card-title">Kondisi Sebelum</h5>
                        <p class="card-text"><?= $rw['kondisi_before'] ?></p>
                        <h5 class="card-title">Kondisi Sesudah</h5>
                        <p class="card-text"><?= $rw['kondisi_after'] ?></p>
                        <h5 class="card-title">Catatan</h5>
                        <p class="card-text"><?= $rw['kondisi_catatan'] ?></p>
                </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
        <!-- end -->
    </div>
</div>


<?= $this->endSection() ?>