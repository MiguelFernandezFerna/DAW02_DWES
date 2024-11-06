<?php
class Persona {
    private string $nombre;

    private string $apellido;


    public function setNombre(string $nom) {
        $this->nombre=$nom;
    }

    public function setApellido(string $ape) {
        $this->apellido=$ape;
    }

    public function imprimirNombreCompleto(){
        echo "Me llamo ".$this->nombre." ".$this->apellido;
        echo '<br>';
    }
}

$lolo = new Persona(); // creamos un objeto
$lolo->setNombre("Lolo");

$lolo->setApellido("García");
$lolo->imprimirNombreCompleto();