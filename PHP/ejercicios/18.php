<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aprendiendo PHP</title>
</head>
<body>
	<div class="contendor">
		<h1>Aprendiendo PHP</h1>
		<div class="contenido">
		<?php $premier_league = array('chelsea','manchester city','manchester united','tottenham','arsenal','liverpool','leicester'); ?>
		<?php $i = 0; ?>
		<?php while ($i <=count ($premier_league)){
			if (count($premier_league) > 0 ){
				echo $premier_league[$i] . '<br/>';
				if($i+1 === count ($premier_league)){
					echo "fin";
				}
			}else{
				echo "no hay resultados";
			}
			$i++;
		} ?>
	</div>
</div>
</body>
</html>
