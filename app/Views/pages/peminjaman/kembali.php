<?= $this->extend('layout/admin-template') ?>

<?= $this->section('content') ?>
<div class="content">
	<div class="container-fluid">
		<?php if($data_riwayat):?>
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="header">
						<h4 class="title">Data Alat yang Dibawa</h4>
						<h5 class="title">(Kode Peminjaman: <?= " ".$data_riwayat[0]['kode_pinjam'] ?>)</h5>
						<small> <b>Peminjam:</b> <?= " ".$data_riwayat[0]['peminjam']." | " ?> <b>Tujuan:</b>  <?= " ".$data_riwayat[0]['tujuan']." | " ?> <b>Tanggal Pinjam:</b>  <?= " ".$data_riwayat[0]['created_at']." | " ?></small>
						<p><a href="/pinjam/kembalialat" class="btn btn-warning btn-sm">Kembali</a></p>
					</div>
					<div class="content">
                            <div class="form-group">
							    <table class="table table-responsive">
									<thead>
										<tr>
											<th>Nama Alat</th>
											<th>Merk</th>
											<th>Tipe</th>
											<th>Kondisi Setelah Pemakaian</th>
											<th>Catatan</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$x=0;
										if($data_riwayat):
										foreach($data_riwayat as $dr): 
											if($dr['kondisi_after'] == '' && $dr['kondisi_catatan'] == '' ):?>
										<form method="post" action="/pinjam/kembalisave/<?= $dr['id_riwayat'] ?>">
										<?= csrf_field(); ?>
										<tr>
											<td><?= $dr['alat_nama'] ?></td>
											<td><?= $dr['alat_merek'] ?></td>
											<td><?= $dr['alat_tipe'] ?></td>
											<td>
												<textarea class="kondisi_after" name="kondisi_after" placeholder="Kondisi Alat sebelum dipinjam" required><?= $dr['kondisi_after'] ?></textarea>
											</td>
											<td>
												<textarea class="kondisi_catatan" name="kondisi_catatan" placeholder="Kondisi Alat sebelum dipinjam" required><?= $dr['kondisi_catatan'] ?></textarea>
											</td>
											<td>
												<input type="hidden" value="<?= $dr['id_alat'] ?>" name="id_alat">
												<input type="hidden" value="<?= $dr['tujuan'] ?>" name="tujuan">
												<input type="hidden" value="<?= $dr['peminjam'] ?>" name="peminjam">
												<input type="hidden" value="<?= $dr['kondisi_before'] ?>" name="kondisi_before" >
												<input type="hidden" value="<?= $dr['kode_pinjam'] ?>" name="kode_pinjam">
												<input type="hidden" value="<?= $dr['kode_pinjam'] ?>" name="kode_pinjam">
												<button name="simpan" type="submit" class="btn btn-success btn-sm table-btn" id="<?= $dr['id']?>" data-riwayat_id="<?= $dr['id']?>">Simpan</button>
												
											</td>
										</tr>
										</form>
										<?php 
											endif;
										$x++;
										endforeach;
										else:?>
											<tr>
												<td colspan="4" class="	text-center text-muted">
													SEMUA PERALATAN SUDAH DIKEMBALIKAN
												</td>
											</tr>
										<?php endif?>
									</tbody>
								</table>
                            </div>
					</div>
				</div>
			</div>
		</div>
		
		<?php else: ?>
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="header">
						<h4 class="title">Pengembalian Alat</h4>
					</div>
					<div class="content">
						<form method="post" action="/pinjam/caririwayat">
                            <?= csrf_field() ?>
                            <input type="hidden" class="form-control" name="id_alat" placeholder="Alat">
                            <div class="form-group">
							    <label>Masukkan Kode Peminjaman</label>
							    <input type="text" class="form-control" name="kode_pinjam" placeholder="Kode Peminjaman" required>
                            </div>
							<div class="form-group">
							    <input type="submit" name="simpan" class="btn btn-success btn-sm" value="Cari">
								<a href="/pinjam" class="btn btn-warning btn-sm">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="header">
						<h4 class="title">Data Peminjaman Belum Kembali</h4>
					</div>
					<div class="content">
                            <div class="form-group">
							    <table class="table table-responsive">
									<thead>
										<tr>
											<th>Kode Pinjam</th>
											<th>Peminjam</th>
											<th>Tujuan</th>
											<th>Taggal Pinjam</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$x=0;
										if($data_kembali):
											foreach($data_kembali as $dr): 
												if($dr['kondisi_after'] == '' && $dr['kondisi_catatan'] == '' ):?>
													<tr>
														<td><?= $dr['kode_pinjam'] ?></td>
														<td><?= $dr['peminjam'] ?></td>
														<td><?= $dr['tujuan'] ?></td>
														<td><?= $dr['created_at'] ?></td>	
													</tr>
												<?php 
												endif;
											$x++;
											endforeach;
										else:?>
											<tr>
												<td colspan="4" class="	text-center text-muted">
													TIDAK ADA DATA PEMINJAMAN YANG BELUM KEMBALI
												</td>
											</tr>
										<?php endif?>
									</tbody>
								</table>
                            </div>
					</div>
				</div>
			</div>
		</div>
		<?php endif ?>
	</div>
</div>
<?= $this->endSection() ?>