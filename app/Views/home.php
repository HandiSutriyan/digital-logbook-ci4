<?= $this->extend('layout/template') ?>

<?= $this->section('konten') ?>
<div class="container konten">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Selamat Datang!</h1>
            <p class="text-center">Silakan pilih aktifitas Anda</p>
        </div>
    </div>
    <div class="row menu">
        <div class="col-md-6 menu-item">
			<a href="<?= base_url('/dashboard') ?>">
				<div class="card">
					<img class="card-img-top" src="assets/images/admin.jpg">
					<div class="card-body">
					<h2 class="card-text text-center">Admin</h2>
					</div>
				</div>
			</a>
        </div>
        <div class="col-md-6 menu-item">
			<a href="<?= base_url('/number') ?>">
				<div class="card">
					<img class="card-img-top" src="assets/images/teknisi.jpg">
					<div class="card-body">
					<h2 class="card-text text-center">Teknisi</h2>
					</div>
				</div>
			</a>
        </div>
    </div>
</div>
    

<?= $this->endSection() ?>


