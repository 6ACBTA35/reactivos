<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aprendiendo PHP</title>
</head>
<body>
	<div class="contenedor">
		<h1>Aprendiendo PHP</h1>

		<div class="contenido">
			<h2>Agenda Teléfonica</h2>
		   <?php
			function usuario($nombre = 'John Doe', Stel = '000000000'){
				return $contacto = $nombre . " " . $tel;
			}

			$usuario = usuario('Juan Pablo', '1234-1234');
			echo $usuario;
			echo "<hr>";

			$uaurio2 = usuario("Miguel");
			echo $usuario2;


		   ?>


		</div>
	</div>
	
</body>
</html>