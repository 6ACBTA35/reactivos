<!DOCTYPE html>
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
			<?php
			$tecnologias=array('CSS','HTML','JavaScript','jQuery','Python');
			?>
			<?php for($i=0; $i<count:$tecnologias); $i++){
	echo tecnologias[$i] . '<br/>';
} ?>
<?php // for loops?>
<?php for($i = 0; $i <=100;$i++){
	echo $i . '<br/>';
} ?>
<hr>
<?php for($i = 0; $i <=100;$i++){
	if($i == 5){
		echo "Cinco <br/>";
		continue;
	}
	echo $i . '<br/>';
}?>
<?php for($i = 0;$i <=500;$i++){
	if($i % 2 == 0){
		echo $i . '<br/>';
	}
}?>
		</div>
	</div>

</body>
</html>