<?php

class Persona {
    protected string $nombre;
    protected string $apellido;

    public function __construct(string $nom, string $ape) {
        $this->nombre = $nom;
        $this->apellido = $ape;
    }

    public function setNombre(string $nom) {
        $this->nombre = $nom;
    }

    public function setApellido(string $ape) {
        $this->apellido = $ape;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getApellido(): string {
        return $this->apellido;
    }

    public function getNombreCompleto(): string {
        return $this->nombre . " " . $this->apellido;
    }
}

class Empleado extends Persona {
    private int $sueldo;
    private array $telefonos = [];
    
    private static int $sueldoTope = 1500;

    public function __construct(string $nom, string $ape, int $sue = 1000) {
        parent::__construct($nom, $ape);
        $this->sueldo = $sue;
    }

    public function setSueldo(int $sue) {
        $this->sueldo = $sue;
    }

    public function getSueldo(): int {
        return $this->sueldo;
    }

    public function getDatosCompleto(): string {
        return $this->getNombreCompleto() . " " . $this->sueldo;
    }

    public function debePagarImpuestos(): bool {
        return $this->sueldo > self::$sueldoTope;
    }

    public function anadirTelefono(int $telefono): void {
        array_push($this->telefonos, $telefono);
    }

    public function listarTelefonos(): string {
        return implode(", ", $this->telefonos);
    }

    public function vaciarTelefonos(): void {
        $this->telefonos = [];
    }

    public static function getSueldoTope(): int {
        return self::$sueldoTope;
    }

    public static function setSueldoTope(int $nuevoSueldoTope): void {
        self::$sueldoTope = $nuevoSueldoTope;
    }
}