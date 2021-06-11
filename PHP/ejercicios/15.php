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
			<?php
			$tecnologia = array('CSS', 'HTML', 'JavaScript', 'jQuery', 'Python');
			?>

			<h2>Lenguajes que conozco</h2>
			<ul>
				<?php foreach($tecnologia as $tecnologia):?>
					<li><?php echo $tecnologia ?></li>
			</ul>
			<?php
			$persona = array(
				'nombre' =>'Juan'
				'pais' => 'Mexico'
				'profesion' => 'Desarrollador web'
			);
			?>
			<h2>Datos personales</h2>
			<ul>
				<?php foreach($persona as $key => $val):?>
					<li><?php echo $key . ':' . $val ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</body>
</html>