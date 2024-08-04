<?php include 'protect.php'; ?>
<h2>Ubah Kategori</h2>
<?php 
	$query=$conn->query("SELECT * FROM kategori WHERE id_kategori='$_GET[id]'");
	$data=$query->fetch_assoc();
?>
<form role="form" method="POST">
	<div class="form-group">
		<label>Nama Kategori</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $data['nama_kategori']; ?>">
	</div>
	<button class="btn btn-primary" name="submit">Ubah</button>
</form>
<?php 
	if (isset($_POST['submit'])) {
		$query = $conn->query("UPDATE kategori SET nama_kategori='$_POST[nama]' WHERE id_kategori='$_GET[id]'");
		echo "<script>alert('Data Berhasil Diubah');</script>";
		echo "<script>location='index.php?halaman=kategori';</script>";
	}
?>