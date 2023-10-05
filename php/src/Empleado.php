<?php

class Empleado extends Persona8
{
    private int $sueldo;
    private array $telefonos;

    public function __construct(string $nombre, string $apellidos, int $edad, int $sueldo, array $telefonos)
    {
        parent::__construct($nombre, $apellidos, $edad);
        $this->sueldo = $sueldo;
        $this->telefonos = $telefonos;
    }


    public function anyadirTelefono(int $telefono) : void{
        $this->telefonos.array_push($telefono);
    }

    public function listarTelefonos(): string{
        $cadenaTotal = '';
        foreach ($this->telefonos as $telefono){
            $cadenaTotal += $telefono;
        }
        return $cadenaTotal;
    }

    public function vaciarTelefonos(): void{
        $this->telefonos = [];
    }

    public function debePagarImpuestos(): bool{
        return $this->sueldo > 3333;
    }

    public function __toString(): string
    {
        return parent::__toString() . " Salario: $this->sueldo, Telefonos: $this->telefonos";
    }


}