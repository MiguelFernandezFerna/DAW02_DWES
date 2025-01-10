<?php
    class Empleado{
            private string $nombre;
            private string $apellido;
            private int $sueldo;
            private array $telefonos = [];
            
            // Constante para el sueldo tope
            const SUELDO_TOPE = 1500;

            public function setNombre(string $nom){
                $this->nombre=$nom;
            }

            public function setApellido(string $ape){
                $this->apellido = $ape;
            }

            public function setSueldo(int $sue){
                $this->sueldo = $sue;
            }

            public function getNombre():string{
                return $this->nombre;
            }

            public function getApellido():string{
                return $this->apellido;
            }

            public function getDatosCompleto():string{
                return $this->nombre." ".$this->apellido." ".$this->sueldo;
            }

            public function debePagarImpuestos():bool{
                // Usamos la constante SUELDO_TOPE
                if ($this->sueldo > self::SUELDO_TOPE) {
                    return true;
                } else {
                    return false;
                }
            }

            public function anadirTelefono(int $telefono):void{
                array_push($this->telefonos, $telefono);
            }

            public function listarTelefonos():string{
                $completado = " ";
                foreach ($this->telefonos as $telefono) {
                    $completado .= "$telefono ";
                }
                return $completado;
            }

            public function vaciarTelefonos():void{
                $this->telefonos = [];
            }

            public function __construct(string $nom, string $ape, int $sue = 1000){
                $this->nombre=$nom;
                $this->apellido = $ape;
                $this->sueldo = $sue;
            }
        }
