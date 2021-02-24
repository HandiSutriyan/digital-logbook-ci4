<?= $this->extend('layout/template') ?>

<?= $this->section('konten') ?>
<div class="container konten">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Lihat Data Alat</h1>
            <p class="text-center">Silakan masukkan nomor peminjaman alat Anda</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="row g-3 align-items-center">
                <div class="col-md-2"></div>
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
        <?php if(!$data_alat): ?>
            <div class="col-md-12 ilustrasi">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>ALAT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Riwayat</td>
                            <td>Riwayat</td>
                        </tr>
                        <tr>
                            <td>Riwayat</td>
                            <td>Riwayat</td>
                        </tr>
                        <tr>
                            <td>Riwayat</td>
                            <td>Riwayat</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <div class="col-md-12 ilustrasi">
                <img class="img-fluid" src="assets/images/cari.jpg">
            </div>
        <?php endif ?>
    </div>
</div>


<?= $this->endSection() ?>