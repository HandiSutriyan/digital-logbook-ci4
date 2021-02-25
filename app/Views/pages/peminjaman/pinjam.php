<?= $this->extend('layout/admin-template') ?>

<?= $this->section('content') ?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="header">
						<h4 class="title">Peminjaman <?= $data_alat['alat_nama'].' '.$data_alat['alat_tipe'] ?></h4>
						<!-- ALERT -->
                        <?php if(session()->getFlashdata('pesan')): ?>
                        	<div class="alert alert-success" role="alert">
							  <?= session()->getFlashdata('pesan'); ?>
							</div>
                        <?php endif; ?>
					</div>
					<div class="content">
						<form method="POST" action="/pinjam/save">
                            <?= csrf_field() ?>
                            <input type="hidden" class="form-control" name="id_alat" placeholder="Alat" value="<?= $data_alat['id'] ?>">
                            <div class="form-group">
							    <label>Tujuan Peminjaman</label>
							    <input type="text" class="form-control" name="tujuan" placeholder="Tujuan" required>
                            </div>
                            <div class="form-group">
							    <label>Nama Peminjam</label>
							    <input type="text" class="form-control" name="peminjam" placeholder="Peminjam" required>
                            </div>
                            <div class="form-group">
							    <label>Kondisi Alat Sebelum Dipinjam</label>
							    <textarea class="form-control" name="kondisi_before" placeholder="Kondisi Alat sebelum dipinjam" required></textarea>
                            </div>
                            
                            <!---
							<div class="form-group">
							    <label>Status</label> <br/>
							    <div class="form-control">
							    <input type="radio"value="0" name="status" checked> OFF AIR 
							    <input type="radio"value="1" name="status" selected> ON AIR
							    </div>
                            </div>
                            -->
							<div class="form-group">
							    <input type="submit" name="simpan" class="btn btn-success btn-sm" value="Simpan">
								<a href="/pinjam/pilihalat" class="btn btn-warning btn-sm">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->endSection() ?>