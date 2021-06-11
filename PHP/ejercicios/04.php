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
 			    $nombre = "Juan";
 			    $apellido = "De la torre";
 			?>

 			<h1><?php echo $nombre . ' ' . $apellido; ?></h1>

 			<?php
 			    echo "<h1>{$nombre} {$apellido}</h1>";
 			 ?>
 		</div> 		
 	</div>
</body>
</html>