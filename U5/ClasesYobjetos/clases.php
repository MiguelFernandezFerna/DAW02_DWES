<?php
    class Persona{
        private string $nombre;
        private string $apellido;

        public function setNombre(string $nom){
            $this->nombre=$nom;
        }

        public function setApeliido(string $ape){
            $this->apellido = $ape;
        }

        public function getNombre():string{
            return $this->nombre;
        }

        public function getApellido():string{
            return $this->apellido;
        }

        public function imprimirNombreCompleto(){
            echo "Me llamo ".$this->nombre." ".$this->apellido;
        }
        public function __construct(string $nom, string $ape){
            $this->nombre=$nom;
            $this->apellido = $ape;
        }
    }

    