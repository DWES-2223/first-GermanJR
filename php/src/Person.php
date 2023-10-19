<?php

abstract class Person
{
    const EDAD_LIMITE = 66;
    private static  $limite_sueldo = self::EDAD_LIMITE;
    private $nombre,$apellidos,$edat;


    public function getEdat()
    {
        return $this->edat;
    }

    public function setEdat($edat): void
    {
        $this->edat = $edat;
    }


    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos): void
    {
        $this->apellidos = $apellidos;
    }

    public function getNombreCompleto(): string
    {
        return $this->getNombre().' '.$this->getApellidos();
    }

    public function estaJubilado(): bool
    {
        return $this->edat > self::$limite_sueldo;
    }

    public static function modificaLimite(int $limite): void
    {
        self::$limite_sueldo = $limite;
    }

    abstract public static function toHtml(Person $p): string;

    public function __toString(): string{
        return "<p>".$this->getNombre()." ".$this->getApellidos()."</p>";
    }

}