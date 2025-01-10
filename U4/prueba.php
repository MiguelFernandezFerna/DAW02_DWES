<?php
//Primer ejemplo
// $nombreArchivo = 'hola.txt';
// $archivo = fopen($nombreArchivo, 'r');
// if ($archivo) {
// echo "El archivo se abrió correctamente.";
//  fclose($archivo); // No olvides cerrar
// } else {
// echo "No se pudo abrir '$nombreArchivo'.";
// }
//Segundo ejemplo
$fp = fopen("hola.txt", "r");
if ($fp === FALSE) {
echo "No existe el fichero o no se pudo leer<br>";
echo "Prueba para ver si guarda en git";
}else{
while(!feof($fp) ){
$car=fgetc($fp);
echo $car;
}
}
fclose($fp);