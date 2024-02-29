<!doctype html>
<html lang="en">
  <head>
  	<title>Login Admin / Petugas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg2.PNG);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				
			</div>

			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center"><b>Login Admin/Petugas</b></h3>
		      	<form action="proses-login-petugas.php" method="post">
		      		<div class="form-group">
		      			<input type="text" name="username" class="form-control" placeholder="Masukan Username anda...." required oninvalid="this.setCustomValidity('Anda belum memasukan username')" oninput="this.setCustomValidity('')">
		      		</div>
	            <div class="form-group">

	            <input type="password" name="password" class="form-control" placeholder="Masukan Password anda...." required oninvalid="this.setCustomValidity('Anda belum memasukan password')" oninput="this.setCustomValidity('')">


	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button tye="submit" class="form-control btn btn-primary submit px-3">LOGIN</button>
	            </div>
	           
	          </form>
	          <a href="index.php">Login Sebagai Siswa</a>

		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

 

	</body>
</html>

