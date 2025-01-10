<?php
    class Empleado{
            private string $nombre;
            private string $apellido;
            private int $sueldo;

            public function setNombre(string $nom){
                $this->nombre=$nom;
            }

            public function setApeliido(string $ape){
                $this->apellido = $ape;
            }

            public function setSueldo(string $sue){
                $this->sueldo = $sue;
            }

            public function getNombre():string{
                return $this->nombre;
            }

            public function getApellido():string{
                return $this->apellido;
            }

            public function getSueldo():int{
                return $this->sueldo;
            }

            public function getDatosCompleto():string{
                return $this->nombre." ".$this->apellido." ".$this->sueldo;
            }

            public function debePagarImpuestos():bool{
                if ($this->sueldo>1500) {
                    return true;
                } else {
                    return false;
                }
                
            }
            public function __construct(string $nom, string $ape, int $sue){
                $this->nombre=$nom;
                $this->apellido = $ape;
                $this->sueldo = $sue;
            }
        }
