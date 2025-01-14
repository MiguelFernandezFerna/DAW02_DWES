<?php
    class Producto{
        private string $nombre;
        private int $precio;

        public function setNombre(string $nom){
            $this->nombre=$nom;
        }
        public function setPrecio(int $pre){
            $this->precio = $pre;
        }
        public function getNombre():string{
            return $this->nombre;
        }
        public function getPrecio():int{
            return $this->precio;
        }

        public function __construct($nombre, $precio){
            $this->nombre=$nombre;
            $this->precio = $precio;
        }
    }