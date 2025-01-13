<?php

class Persona {
    protected string $nombre;
    protected string $apellido;
    protected int $edad;

    public function __construct(string $nom, string $ape, int $edad) {
        $this->nombre = $nom;
        $this->apellido = $ape;
        $this->edad = $edad;
    }

    public function setNombre(string $nom) {
        $this->nombre = $nom;
    }

    public function setApellido(string $ape) {
        $this->apellido = $ape;
    }

    public function setEdad(int $edad) {
        $this->edad = $edad;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getApellido(): string {
        return $this->apellido;
    }

    public function getEdad(): int {
        return $this->edad;
    }

    public function getNombreCompleto(): string {
        return $this->nombre . " " . $this->apellido;
    }

    public function getDatosCompletos(): string {
        return $this->getNombreCompleto() . ", Edad: " . $this->edad;
    }
}

class Empleado extends Persona {
    private int $sueldo;
    private array $telefonos = [];
    
    private static int $sueldoTope = 1500;

    public function __construct(string $nom, string $ape, int $edad, int $sue = 1000) {
        parent::__construct($nom, $ape, $edad);
        $this->sueldo = $sue;
    }

    public function setSueldo(int $sue) {
        $this->sueldo = $sue;
    }

    public function getSueldo(): int {
        return $this->sueldo;
    }

    public function getDatosCompleto(): string {
        return parent::getDatosCompletos() . ", Sueldo: " . $this->sueldo;
    }

    public function debePagarImpuestos(): bool {
        //devuelve true si se cumplen las 2, sino devuelve false
        $esMayorDeEdad = $this->edad > 21;
        $superaSueldoTope = $this->sueldo > self::$sueldoTope;
        
        return $esMayorDeEdad && $superaSueldoTope;
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