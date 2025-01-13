<?php
    include("clases.php");
    include("504EmpleadoConstante.php");
    include("claseEstatica.php");
    //Lo comento porque en el archivo al que llamamos hemos metido una 
    //funcion magica __construct que tiene 2 parametros, por tanto solo
    //nos deja psarle 2 parametros
    // $lolo = new Persona();
    // $lolo->setNombre("Lolo");
    // $lolo->setApeliido("García");

    // $lolo->imprimirNombreCompleto();

    $lola =new Persona("Lola","López");
    $lola->imprimirNombreCompleto();
    echo "<br>";

    echo "Ahora vamos a usar el serializable<br>";

    $faliyo = new Persona("Faliyo","Garrulo");

    $personaSerializable = serialize($faliyo);

    echo $personaSerializable."<br>";
    echo "Ahora deserializamos: <br>";

    $personaDeserializable = unserialize($personaSerializable);
    echo $personaDeserializable->getNombre()." ";
    echo $personaDeserializable->getApellido();

