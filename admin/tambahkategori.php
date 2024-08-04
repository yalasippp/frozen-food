<?php include 'protect.php'; ?>
<h2>Tambah Kategori</h2>

<form role="form" method="POST">
	<div class="form-group">
		<label>Nama Kategori</label>
		<input type="text" class="form-control" name="nama">
	</div>
<?php 
	if (isset($_POST['submit'])) {
		$query=$conn->query("INSERT INTO kategori VALUES ('','$_POST[nama]')");
		echo "<br><div class='alert alert-info'>Data Tersimpan</div>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=kategori'>";
	}
?>