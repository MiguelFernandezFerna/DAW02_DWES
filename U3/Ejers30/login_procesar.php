<?php
/*si va bien redirige a principal.php 
si va mal, mensaje de error */  	
	if ($_POST['usuario'] === "usuario" and $_POST["clave"] === "1234"){
		header("Location:http://www.google.es");
	} else {
		header("Location:login_procesar.html");
	} 