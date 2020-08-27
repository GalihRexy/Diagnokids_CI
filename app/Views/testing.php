<!DOCTYPE html>
	<html>
	<head>
		<title>Testing</title>
	</head>
	<body>
		<form action="<?= base_url('tes/proses'); ?>" method="post">
			<?= csrf_field() ?>
			<input type="number" name="number1">
			<br>
			<input type="number" name="number2">
			<button type="submit">Go</button>
		</form>
	
	</body>
	</html>	