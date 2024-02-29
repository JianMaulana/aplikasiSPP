<?php 
session_start();
if(empty($_SESSION['id_petugas'])){
	echo "<script>
			alert('Maaf Anda Belum Login'); 
			document.location.href = '../index2.php';
	</script>";
}
if($_SESSION['level']!='petugas'){
	echo "<script>
			alert('maaf anda bukan sesi admin'); 
			document.location.href = '../index2.php';
	</script>";
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin - Aplikasi pembayaran SPP.</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: 	#B0C4DE;">
<div class="container mt-5">
	<h3 style="color: white;">Aplikasi pembayaran SPP</h3>
	<div class="alert alert-info">
		Anda login sebagai petugas <b><?= $_SESSION['nama_petugas'] ?></b> Aplikasi pembayaran SPP.
	</div>
	<a href="petugas.php?url=petugas" class="btn btn-primary">Petugas</a>
	<a href="petugas.php?url=pembayaran" class="btn btn-primary">pembayaran</a>
	<a href="petugas.php?url=logout" class="btn btn-primary">Logout</a>

	<div class="card mt-2">
		<div class="card-body">
			<!-- ini isi web kita -->
			<?php 
			$file = @$_GET['url'];
				if(empty($file)){
					echo "<h4>Selamat datang di halaman Petugas.</h4>";
					echo "Aplikasi pembayaran SPP digunakan untuk mempermudahdalam mencatat pembayaran siswa / siswi di sekolah";
				}else{
					include $file. ".php";
				}
			 ?>
		</div>
	</div>
</div>


<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>