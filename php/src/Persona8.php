<?php

class Persona8
{
    const LIMITE_EDAT = 66;
    private static int $limite_edad = 66;

    public function __construct(
        private string $nombre,
        private string $apellidos,
        private int $edad,
    )
    {}

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): void
    {
        $this->apellidos = $apellidos;
    }

    public function getEdad(): int
    {
        return $this->edad;
    }

    public function setEdad(int $edad): void
    {
        $this->edad = $edad;
    }

    public function getNombreCompleto() :string{
        return $this->nombre . " " . $this->apellidos;
    }

    public function estaJubilado(): bool{
        if ($this->edad >= self::LIMITE_EDAT)
            return true;

        return false;
    }

    public static function modificaLimite(int $nuevoLimite){
        self::$limite_edad = $nuevoLimite;
    }

    public function __toString(): string
    {
        return "Nombre: $this->nombre, Apellidos: $this->apellidos, Edad: $this->edad.";
    }
}