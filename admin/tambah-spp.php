<h5>Halaman tambah Data SPP</h5>
<a href="?url=spp" class="btn btn-primary">KEMBALI</a>
<hr>
<form method="post" action="?url=proses-tambah-spp">
	<div class="form-group mb-2">
		<label>Tahun</label>
		<input type="number" name="tahun" maxlength="4" class="form-control" required oninvalid="this.setCustomValidity('Anda belum memasukan Tahun')" oninput="this.setCustomValidity('')">
	</div>
	<div class="form-group mb-2">
		<label>Nominal</label>
		<input type="number" name="nominal" maxlength="13" class="form-control" required oninvalid="this.setCustomValidity('Anda belum memasukan Nominal')" oninput="this.setCustomValidity('')">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success">SIMPAN</button>
		<button type="reset" class="btn btn-warning">KOSONGKAN</button>
	</div>


</form>