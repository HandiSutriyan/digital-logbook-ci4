<?= $this->extend('layout/admin-template') ?>

<?= $this->section('content') ?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="header">
						<h4 class="title">Peminjaman Alat</h4>
					</div>
					<div class="content">
						<form method="POST" action="/pinjam/save">
                            <?= csrf_field() ?>
                            <input type="hidden" class="form-control" name="id_alat" placeholder="Alat">
                            <div class="form-group">
							    <label>Tujuan Peminjaman</label>
							    <input type="text" class="form-control" name="tujuan" placeholder="Tujuan" required>
                            </div>
                            <div class="form-group">
							    <label>Nama Peminjam</label>
							    <input type="text" class="form-control" name="peminjam" placeholder="Peminjam" required>
							</div>
							<div class="form-group">
								<label class=" col-form-label">Alat-Alat yang Dipinjam</label>
								<select class="bootstrap-select strings form-control" name="id_alat[]" data-width="100%" data-live-search="true" multiple required>
									<?php foreach ($data_alat as $row) :?>
										<option value="<?php echo $row['id'];?>"><?php echo $row['alat_nama']." ".$row['alat_tipe'];?></option>
									<?php endforeach;?>
								</select>
							</div>
                            <div class="form-group">
							    <label>Kondisi Alat Sebelum Dipinjam</label>
							    <textarea class="form-control" name="kondisi_before" placeholder="Kondisi Alat sebelum dipinjam" required></textarea>
                            </div>
							<div class="form-group">
							    <input type="submit" name="simpan" class="btn btn-success btn-sm" value="Simpan">
								<a href="/pinjam" class="btn btn-warning btn-sm">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->endSection() ?>