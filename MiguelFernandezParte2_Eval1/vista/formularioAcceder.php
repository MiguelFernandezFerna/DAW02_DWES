<?php
/*si va bien redirige a principal.php 
si va mal, mensaje de error */  	
	if ($_POST['usuario'] === "james_bon" and $_POST["clave"] === "007"){
		header("Location:listarTareas.php");
	} else {
		header("Location:formularioAcceder.html");
	} 