<?php

	$archivo = "visitas.txt";
			
      	//si no esta creado el archivo visitas.txt lo crea y escribe 0 en él.
	if (!file_exists($archivo)){
		$f = fopen($archivo, "w");
		fwrite($f,"0");
		fclose($f);
	}
			
	//lo lee para ver las visitas que lleva la página
	$f = fopen($archivo,"r");
	$contador = fread($f, filesize($archivo));
	fclose($f);
			
	//le suma uno y lo escribe
	$contador++;
	$f = fopen($archivo, "w");
	fwrite($f, $contador);
	fclose($f); 
      
      	//lo muestra por pantalla.
	echo "<a>VISITAS: $contador</a>";

?>
