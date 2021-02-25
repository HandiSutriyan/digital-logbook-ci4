<?= $this->extend('layout/template') ?>

<?= $this->section('konten') ?>
<div class="container konten">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center"><?= $title ?></h1>
            <p class="text-center">Peminjam Alat: <?= $data_riwayat[0]['alat_nama']?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <a href="<?= base_url('/number/cari/'.$last_code) ?>" class="btn btn-primary">Kembali</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tanggal Pinjam</th>
                        <th>Peminjam</th>
                        <th>Tujuan</th>
                        <th>Kondisi Sebelum</th>
                        <th>Kondisi Sesudah</th>
                        <th>Catatan</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $x=1;
                foreach($data_riwayat as $rw): 
                    if($rw['kondisi_after']):
                ?>
                    <tr>
                        <td><?= $x ?></td>
                        <td><?= $rw['created_at'] ?>-<?= $rw['updated_at'] ?></td>
                        <td><?= $rw['peminjam'] ?></td>
                        <td><?= $rw['tujuan'] ?></td>
                        <td><?= $rw['kondisi_before'] ?></td>
                        <td><?= $rw['kondisi_after'] ?></td>
                        <td><?= $rw['kondisi_catatan'] ?></td>
                    </tr>
                <?php 
                endif;
                $x++;
                endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    

</div>


<?= $this->endSection() ?>