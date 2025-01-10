<?php
    include("clases.php");
    include("502EmpleadoTelefonos.php");
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

    echo "<br>";
    // $emp = new Empleado("Juan","Fernandez",1600);
    // echo $emp->getDatosCompleto();
    // echo "<br>";
    // echo $emp->debePagarImpuestos();
    $emp = new Empleado();
    $emp ->setNombre("Jorge");
    $emp ->setApellido("Garcia");
    $emp -> setSueldo(1600);
    $emp -> anadirTelefono(475632875);
    echo $emp -> listarTelefonos();
