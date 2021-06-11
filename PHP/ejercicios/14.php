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
			$tecnologias = array('CSS', 'HTML', 'javaScript', 'jQuery');
			$existe = in_array('HTML5', $tecnologias);
			?>

			<pre>
				<?php var_dump($existe); ?>
			</pre>

			<?php
			$persona = array(
				'nombre' => 'Juan',
				'pais' => 'Mexico',
				'profesion' => 'Desarrollador web'
			);
			?>

			<?php $existe2 = in_array('Juan', array_values($persona)); ?>		
			<pre>
				<?php var_dump(existe2); ?>
			</pre>
		</div>
	</div>
</body>
</html>