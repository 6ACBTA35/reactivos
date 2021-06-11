<!DOCTYPE html>
<html >
 <head>
        <meta charset="UTF-8">
         <title>Aprendiendo PHP</title>
          </head>
     <body>


        <div class="contenedor">
        	<h1>Aprendiendo PHP</h1>


        	  <div class="contenido">
        	  	     <?php
        	  	      if (1 < 0) {
        	  	        echo " 1 es menor";
        	  	  } else {
        	  	    echo "1 es mayor";
        	  	  }
        	  	  echo "hr";

        	  	  $edad1 = 13;
        	  	  $edad2 = 12;
        	  	  if($edad1 < edad2) {
        	  	  echo "La edad 1 es mayor";
        	  	 }elseif ($edad1 == $edad2) {
        	  	 echo "son iguales";
        	  	 } else {
        	  	 echo "la edad 2 es mayor"; 
        	     }
        	     echo "<hr>";
        	     $numero1 = 10;
        	     if($numero1 % 2 == 0){
        	     echo el numero es par";
        	     }else {
        	      echo "El numero es impar";
        	     }
        	   
        	   ?>

            </div>
       </div>
   </body>
 </html>
