<?= $this->extend('layout/admin-template') ?>

<?= $this->section('content') ?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<nav class="navbar navbar-light bg-light">
				  <form class="form-inline" method="post" action="">
				    <input class="form-control mr-sm-2" type="text" name="keyword" placeholder="Cari Data" aria-label="Search">
				    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
				    <a href="/alat/create" class="btn btn-primary btn-md">Tambah Data</a> 
				  </form>
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<!-- TABEL -->
				<div class="card">
					<div class="header">
                        <h4 class="title">Database Peralatan </h4>
                    </div>
                    <div class="content">
                        
                        <div class="table-responsive table-full-width">
							<table class="table table-hover table-striped">
								<thead>
									<th>No</th>
									<th>Nama</th>
									<th>Merk</th>
									<th>Tipe</th>
									<th>Serial Number</th>
									<th>Kategori</th>
								</thead>
								<tbody>
                                    <?php 
                                    $i= 1;
                                    foreach($data_alat as $da): ?>
                                        <tr class='clickable-row' data-href='/pinjam/pinjamalat/<?= $da['id'] ?>'>
                                            <td><?= $i ?></td>
                                            <td><?= $da['alat_nama'] ?></td>
                                            <td><?= $da['alat_merek'] ?></td>
                                            <td><?= $da['alat_tipe'] ?></td>
                                            <td><?= $da['alat_sernum'] ?></td>
                                            <td><?= $da['role_name'] ?></td>
                                        </tr>
                                    
                                    <?php 
                                    $i++;
                                    endforeach ?>
								</tbody>
							</table>
						</div>
						<!-- PAGINATION BUTTON -->
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->endSection() ?>