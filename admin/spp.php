<h5>Halaman data SPP</h5>
<a href="?url=tambah-spp" class="btn btn-primary">Tambh SPP</a>
<hr>
<table class="table table-striped table-bordered">
	<tr class="fe-bold">
		<th>No</th>
		<th>Tahun</th>
		<th>Nominal</th>
		<th>Edit</th>
		<th>Hapus</th>
	</tr>
	<?php 
		include'../koneksi.php';
		$no = 1;
		$sql = "SELECT*FROM spp ORDER BY id_spp DESC";
		$query = mysqli_query($koneksi, $sql);
		foreach($query as $data){ ?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?= $data['tahun'] ?></td>
				<td><?= $data['nominal'] ?></td>
				<td>
					<a href="?url=edit-spp&id_spp=<?= $data['id_spp']?>"class= 'btn btn-warning'>EDIT</a>
				</td>
				<td>
					<a onclick="return confirm('Apakah anda yakin ingin menghapus Data')" href="?url=hapus-spp&id_spp=<?= $data['id_spp']?>"class= 'btn btn-danger'>HAPUS</a>
				</td>
			</tr>

		<?php  }?>

	 
	

</table>