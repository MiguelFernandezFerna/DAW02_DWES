<?php
  $salir = false;
  $intentos = 0;
  //Tenemos que conseguir que nos de el número aleatorio, como si fuese un dado del 1 al 6, y que al dar el dado se salga del programa, 
  //tenemos un maximo de 10 intentos, si se sobrepasan diremos que hemos gastado todos los intentos y saldremos del programa
  for ($i = 1; $i <= 10 && !$salir; $i++) {
    $dado = rand(1, 6);
  // rand(): Función que devuelve un valor aleatorio
  echo "Tiramos dado";
    echo"<pre>";
    echo " ___________<br>";
    echo "|           |<br>";
    echo "|     $dado     |<br>";
    echo "|           |<br>";
    echo "|___________|<br>";
    echo"</pre>";
  
    $intentos++;
    if ($dado === 5) {
      $salir = true;
      echo "<br>Han salido $intentos intentos";
    }
  }
  if ($dado != 5 && $intentos >= 10) {
    echo"Has superado el numero de intentos";
}
  
  


