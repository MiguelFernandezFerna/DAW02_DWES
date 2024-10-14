<?php
    $a=4;
    $b=2;
    echo 'Estas con las operaciones aritméticas: ';
    echo '<br>';
    echo '-$a: '.$c = -$a;	//Negación	Opuesto de $a.
    echo '<br>';
    echo '$a + $b: '.$c =$a + $b;	//Suma	Suma de $a y $b.
    echo '<br>';
    echo '$a - $b: '.$c =$a - $b;	//Resta	Diferencia de $a y $b.
    echo '<br>';
    echo '=$a * $b: '.$c =$a * $b;	//Multiplicación	Producto de $a y $b.
    echo '<br>';
    echo '$a / $b: '.$c =$a / $b;	//División	Cociente de $a y $b.
    echo '<br>';
    echo '$a % $b: '.$c =$a % $b;	//Módulo / Resto  	Resto de $a dividido por $b.
    echo '<br>';
    echo '$a ** $b: '.$c =$a ** $b;	//Potencia	Resultado de $a elevado a $b.   
    echo '<br><br>';
    echo 'Estas con las operaciones de comparación: ';
    echo '<br>';
    echo '$a == $b: '.$c =$a == $b;	//Igual	true si $a es igual a $b.
    echo '<br>';
    echo '$a === $b: '.$c=$a === $b;	//Idéntico, Comparación estricta	true si $a es igual a $b, y son del mismo tipo de dato.
    echo '<br>';
    echo '$a != $b, $a <> $b'.$c=$a != $b, $a <> $b;	//Diferente	true si $a no es igual a $b después de la conversión de tipos.
    echo '<br>';
    echo '$a !== $b: '.$c=$a !== $b;	//No idéntico	true si $a no es igual a $b, o si no son del mismo tipo.
    echo '<br>';
    echo '$a < $b: '.$c=$a < $b;	//Menor que	true si $a es estrictamente menor que $b.
    echo '<br>';
    echo '$a > $b'.$c=$a > $b;	//Mayor que	true si $a es estrictamente mayor que $b.
    echo '<br>';
    echo '$a <= $b: '.$c=$a <= $b;	//Menor o igual que	true si $a es menor o igual que $b.
    echo '<br>';
    echo '$a >= $b: '.$c=$a >= $b;	//Mayor o igual que	true si $a es mayor o igual que $b.
    echo '<br>';
    echo '$a <=> $b: '.$c=$a <=> $b;	//Nave espacial	Devuelve -1, 0 o 1 cuando $a es respectivamente menor, igual, o mayor que $b. PHP >= 7.
    echo '<br>';
    echo '$a ?? $b ?? $c: '.$c=$a ?? $b ?? $c;	//Fusión de null	El primer operando de izquierda a derecha que exista y no sea null. null si no hay valores definidos.   
    echo '<br><br>';
    echo 'Estas con las operaciones lógicas: ';
    echo '<br>';
    //No entiendo porque hay un par que el echo, en la parte entre las comillas no se ve.
    echo '$a and $b, $a && $b: '.$c=$a and $b, $a && $b;	 //And (y)	  true si tanto $a como $b son true.
    echo '<br>';
    echo '$a or $b, $a || $b: '.$c=$a or $b, $a || $b; //Or (o inclusivo)	  true si cualquiera de $a o $b es true.
    echo '<br>';
    echo '$a xor $b: '.$c=$a xor $b;	 //Xor (o exclusivo)	  true si $a o $b es true, pero no ambos. 
    echo '<br>';  
    echo '!$a: '.$c=!$a;	 //Not (no)	  true si $a no es true.
    echo '<br><br>';
    echo 'Estas con asignación: ';
    echo '<br>';
    echo '$a = $b: '.$c=$a = $b;	 //Asignación	   Asigna a $a el valor de $b
    echo '<br>';
    echo '$a += $b: '.$c=$a += $b;	 //Asignación de la suma	   Le suma a $a el valor de $b. Equivalente a $a = $a + $b
    echo '<br>';
    echo '$a -= $b: '.$c=$a -= $b;	 //Asignación de la resta	   Le resta a $a el valor de $b. Equivalente a $a = $a - $b
    echo '<br>';
    echo '$a *= $b: '.$c=$a *= $b;	// Asignación del producto	   Asigna a $a el producto de $a por $b. Equivalente a $a = $a * $b
    echo '<br>';
    echo '$a /= $b: '.$c=$a /= $b;	 //Asignación de la división	   Asigna a $a el conciente de $a entre $b. Equivalente a $a = $a / $b
    echo '<br>';
    echo '$a %= $b: '.$c=$a %= $b;	 //Asignación del resto	   Asigna a $a el resto de dividir $a entre $b. Equivalente a $a = $a % $b   
    echo '<br>';
    echo '$a .= $b: '.$c=$a .= $b;	 //Concatenación	   Concatena a $a la cadena $b. Equivalente a $a = $a . $b
    echo '<br>';
    echo '$a++: '.$c=$a++;	 //Incremento	   Incrementa $a en una unidad. Equivalente a $a = $a + 1
    echo '<br>';
    echo '$a--: '.$c=$a--;	 //Decremento	   Decrementa $a en una unidad. Equivalente a $a = $a - 1





