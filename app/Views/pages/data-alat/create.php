<?= $this->extend('layout/admin-template') ?>

<?= $this->section('content') ?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="header">
						<h4 class="title">Input Data Alat</h4>
					</div>
                    <!-- ALERT -->
                    <?php if(session()->getFlashdata('pesan')): ?>
                        	<div class="alert alert-success" role="alert">
							  <?= session()->getFlashdata('pesan'); ?>
							</div>
                     <?php endif; ?>
					<div class="content">
						<form method="POST" action="/alat/save">
                            <?= csrf_field() ?>
                            <div class="form-group">
							    <label>Nama Alat</label>
							    <input type="text" class="form-control" name="alat_nama"  placeholder="Tujuan" required>
                            </div>
                            <div class="form-group">
							    <label>Merek</label>
							    <input type="text" class="form-control" name="alat_merek" placeholder="Merek" required>
                            </div>
                            <div class="form-group">
							    <label>Tipe</label>
							    <input type="text" class="form-control" name="alat_tipe" placeholder="Peminjam" required>
							</div>
                            <div class="form-group">
							    <label>Serial Number</label>
							    <input type="text" class="form-control" name="alat_sernum" placeholder="Peminjam" required>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-form-label">Kategori</label>
								<select class="form-control" name="alat_kategori" required>
                                    <?php foreach ($data_role as $row) :
                                        if($row['role_code'] != 'admin'):
                                        ?>
										<option value="<?php echo $row['role_code'];?>"><?php echo $row['role_name']?></option>
                                    <?php 
                                        endif;
                                    endforeach;?>
								</select>
							</div>
							<div class="form-group">
							    <input type="submit" name="simpan" class="btn btn-success btn-sm" value="Simpan">
								<a href="/alat" class="btn btn-warning btn-sm">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->endSection() ?>