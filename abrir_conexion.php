<?php 
	// Parametros a configurar para la conexion de la base de datos 
	$host = "localhost"; 
	$basededatos = "deber1"; 
	$usuariodb = "root"; 
	$clavedb = "";

	$tabla_db1 = "cuenta"; 	   
		
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);


	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}

?>