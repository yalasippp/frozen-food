<?php include 'protect.php'; ?>
<h2>Data Kategori</h2>

<div class="table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>ID Kategori</th>
				<th>Nama Kategori</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; ?>
			<?php $ambil=$conn->query("SELECT * FROM kategori"); ?>
			<?php while ($data=$ambil->fetch_assoc()) {
				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $data['id_kategori']; ?></td>
					<td><?php echo $data['nama_kategori']; ?></td>
					<td>	
						<a href="index.php?halaman=ubahkategori&id=<?php echo $data['id_kategori']; ?>" class="btn btn-warning">Ubah</a>
					</td>
				</tr>
				<?php
			} ?>
		</tbody>
	</table>	
</div>
<a href="index.php?halaman=tambahkategori" class="btn btn-primary">Tambah kategori</a>