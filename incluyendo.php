<!DOCTYPE html>
<html>
<head>
	<title>Include y Require en PHP</title>
</head>
<body>
	<p>Incluyendo la pagina de estructuras de control <br>
	<?php
		include('control.php');
	?>
	</p>
	<p>
		Incluyendo una pagina de internet cualquiera <br>
		<?php
			include_once('/home/bryan/Escritorio/english project/index.html');
		?>
	</p>
	<p> Haciendo Require en php <br>
		<?php
		require_once('../applications.html');
		?>
	</p>
	<p> require de nuevo <br>
		<?php
		require_once('../applications.html');
		?>
</body>
</html>