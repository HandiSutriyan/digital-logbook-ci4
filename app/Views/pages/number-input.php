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
    <div class="row">
        <?php if($riwayat): ?>
            <div class="col-md-12">
                <?php 
                foreach($riwayat as $rw):
                    if ($rw['kondisi_after'] != ''):
                ?>
                <div class="card text-dark bg-light mb-3">
                    <div class="card-header">
                            <small><?= $rw['alat_nama'] ?></small> <br>
                            <small>Tipe: <?= $rw['alat_tipe'] ?> SN: <?= $rw['alat_tipe'] ?></small>
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
                <?php 
                    endif;
                endforeach ?>
            </div>
        <?php else: ?>
            <div class="col-md-12 ilustrasi">
                <img class="img-fluid" src="assets/images/cari.jpg">
            </div>
        <?php endif ?>
    </div>
    <!-- Accordion -->
    <div class="row">
        <!-- start-->
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Accordion Item #1
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Accordion Item #2
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Accordion Item #3
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
        </div>
        <!-- end -->
    </div>
</div>


<?= $this->endSection() ?>