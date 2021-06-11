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
                       'nombre' => 'Juan',
                       'pais' => 'México',
                       'profesion' => 'Desarrollador Web'
                );
            ?>
            <pre> <?php print_r($persona); ?> </pre>
            <?php echo $persona['profesion'];?>

            <pre> <?php print_r(array_values( $persona ) ); ?> </pre>

            <pre> <?php print_r(array_keys( $persona ) ); ?> </pre>

  		</div>
  	</div>
      
  </body>
</html>