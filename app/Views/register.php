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


	  	  			<div>
	  	  				<h1 class="mt-4">Selamat Datang!</h1>
		  	  			<form class="mt-5" method="post" action="<?= base_url('auth/registrasi'); ?>">
	  	  				<?= csrf_field() ?>
		  	  			  <div class="form-group">
						    <label for="nama" <?php if(isset($errors['nama'])) { echo "class='text-danger'"; } ?>>Nama Lengkap <?php if(isset($errors['nama'])) { echo '| '.$errors['nama']; } ?></label>
						    <input type="text" class="form-control" name="nama" autocomplete="off">
						  </div>
						  <div class="form-group">
						    <label for="email" <?php if(isset($errors['email'])) { echo "class='text-danger'"; } ?>>Alamat Email <?php if(isset($errors['email'])) { echo '| '.$errors['email']; } ?></label>
						    <input type="email" class="form-control" name="email" autocomplete="off">
						  </div>
						  <div class="form-group">
						    <label for="password" <?php if(isset($errors['password'])) { echo "class='text-danger'"; } ?>>Kata Sandi <?php if(isset($errors['password'])) { echo '| '.$errors['password']; } ?></label>
						    <input type="password" class="form-control" name="password" autocomplete="off">
						  </div>
						  <div class="form-group">
						    <label for="password2" <?php if(isset($errors['password2'])) { echo "class='text-danger'"; } ?>>Konfirmasi Kata Sandi <?php if(isset($errors['password2'])) { echo '| '.$errors['password2']; } ?></label>
						    <input type="password" class="form-control" name="password2" autocomplete="off">
						  </div>
						  <button class="mt-2" >Register</button>
						</form>
						<span>Sudah punya akun? <a  href="/auth" class="toggle" id="register-button">Login</a></span>
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

	
</script>
</html>
