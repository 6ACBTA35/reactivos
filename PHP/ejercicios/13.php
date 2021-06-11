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
		$persona = array(
			'datos' => array(
				'nombre' => 'Juan',
				'pais' => 'Mexico',
				'Profecion' => 'Desarrollador Web'
			),
			'lenguaje' => array(
				'front_end'=> array('CSS', 'html5', 'javascript', 'jquery'),
				'back_end' => array('php', 'mysql', 'python')

			)
		);
		?>	
		<pre>
			<?php pront_r($persona['lenguaje']['front_end'][2]); ?>
		</pre>		
		</div>
	</div>
</body>
</html>