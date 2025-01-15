<?php
class Producto {
    private $nombre;
    private $precio;

    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function __sleep() {
        return ['nombre', 'precio'];
    }

    public function __wakeup() {
        // No necesitamos hacer nada especial aquí
    }
}