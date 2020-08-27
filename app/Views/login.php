<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Diagnokids | Login</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/custom.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&display=swap" rel="stylesheet">
</head>
<body>
	<section id="login" class="container-fluid">
		<div class="row">
			<div class="col form-part">
				<div class="content mt-5 ml-5">
	  	  			<img id="logo" src="/img/logo.png" width="140">
	  	  			<div id="log">
	  	  				<h1 class="mt-5">Selamat Datang!</h1>
	  	  				<?php if(null !== session('alert-success')) { ?>
	  	  				<div class="alert alert-success" role="alert">
	  	  					<?php echo session('alert-success'); ?>
						</div>
						<?php } ?>
						<?php if(null !== session('alert-danger')) { ?>
	  	  				<div class="alert alert-danger" role="alert">
	  	  					<?php echo session('alert-danger'); ?>
						</div>
						<?php } ?>
						<?php if(null !== session('alert-info')) { ?>
	  	  				<div class="alert alert-info" role="alert">
	  	  					<?php echo session('alert-info'); ?>
						</div>
						<?php } ?>
		  	  			<form class="mt-5" method="post" action="<?= base_url('auth/proses_login'); ?>">
		  	  			  <?= csrf_field() ?>
						  <div class="form-group">
						    <label for="email" <?php if(isset($errors['email'])){ echo "class='text-danger'"; } ?>>Alamat Email <?php if(isset($errors['email'])){ echo '| '.$errors['email']; } ?></label>
						    <input type="email" class="form-control" name="email" autocomplete="off">
						  </div>
						  <div class="form-group">
						    <label for="password" <?php if(isset($errors['password'])){ echo "class='text-danger'"; } ?>>Kata Sandi <?php if(isset($errors['password'])){ echo '| '.$errors['password']; } ?></label>
						    <input type="password" class="form-control" name="password" autocomplete="off">
						  </div>
						  <button class="mt-5">Log In</button>
						</form>
						<span>Belum punya akun? <a class="toggle" id="login-button">Resigter</a></span>
	  	  			</div>


	  	  			<div id="register">
	  	  				<h1 class="mt-4">Selamat Datang!</h1>
		  	  			<form class="mt-5" method="post" action="<?= base_url('auth/registrasi'); ?>">
	  	  				<?= csrf_field() ?>
		  	  			  <div class="form-group">
						    <label for="nama">Nama Lengkap</label>
						    <input type="text" class="form-control" name="nama" autocomplete="off">
						  </div>
						  <div class="form-group">
						    <label for="email">Alamat Email</label>
						    <input type="email" class="form-control" name="email" autocomplete="off">
						  </div>
						  <div class="form-group">
						    <label for="password">Kata Sandi</label>
						    <input type="password" class="form-control" name="password" autocomplete="off">
						  </div>
						  <div class="form-group">
						    <label for="password2">Konfirmasi Kata Sandi</label>
						    <input type="password" class="form-control" name="password2" autocomplete="off">
						  </div>
						  <button class="mt-2" >Register</button>
						</form>
						<span>Sudah punya akun? <a  class="toggle" id="register-button">Login</a></span>
	  	  			</div>
				</div>
			</div>
			<div class="col illustration-part container d-none d-lg-block d-xl-block">
				<div class="decoration">
					<img class="flower1" src="/img/flower1.png" width="200">
				</div>
				<div class="ilustration">
					<img src="/img/docktor.png" width="400">
				</div>
				
			</div>	
		</div>
		
	</section>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript" src="/js/bootstrap.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".toggle").click(function(){
			$("#log").toggle();
			$("#register").toggle();
		});	
	});
	
</script>
</html>