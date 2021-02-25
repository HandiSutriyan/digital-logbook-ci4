<?= $this->extend('layout/template') ?>

<?= $this->section('konten') ?>
<div class="container konten">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center"><?= $riwayat ? $riwayat[0]['tujuan']: 'Cek Riwayat Alat' ?></h1>
            <p class="text-center"><?= $riwayat ?  "Peminjam Alat: ".$riwayat[0]['peminjam']:'Silakan masukkan nomor peminjaman alat Anda' ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 text-center my-2">
            <a href="/">Kembali ke Beranda</a>
        </div>
        <div class="col-md-4"></div>
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
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-center my-2">
            <img class="img img-responsive" src="<?= base_url('assets/images/cari.jpg') ?>" alt="cari" width="500">
        </div>
        <div class="col-md-2"></div>
    </div>
    <?php else: ?>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <ul class="list-group">
            <?php foreach($riwayat as $rw):?>
                <a href="/number/detail/<?= $rw['kode_pinjam']?>/<?= $rw['id_alat'] ?>">
                <li class="list-group-item"><?= $rw['alat_nama']." ".$rw['alat_tipe'] ?></li>
                </a>
            <?php endforeach ?>
            </ul>
        </div>
        <div class="col-md-2"></div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <?php endif ?>

</div>


<?= $this->endSection() ?>