<?php

class Enterprise implements JSerializable
{
    private array $workers = array();

    public function __construct(protected $nom,protected $direccio) {}

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    public function getDireccio()
    {
        return $this->direccio;
    }

    public function setDireccio(mixed $direccio): void
    {
        $this->direccio = $direccio;
    }

    public function addWorker(Worker $w): void
    {
        $this->workers[] = $w;
    }

    public function listWorkersHtml() :string{
        $html = '<div>';
        foreach ($this->workers as $worker){
            $html .= Worker::toHtml($worker);
        }
        return $html.'</div>';
    }

    public function getCosteNominas(): int
    {
        $cost = 0;
        foreach ($this->workers as $worker){
            $cost += $worker->calcularSueldo();
        }
        return $cost;
    }

    public function toJSON(): string
    {
        $mapa = array();
        foreach ($this as $clave => $valor) {
            if (is_array($valor)){
                foreach ($valor as $worker){
                    $mapa[$clave][] = $worker->toJSON();
                }
            } else {
                $mapa[$clave] = $valor;
            }
        }
        return json_encode($mapa);
    }

    public function toSerialize(): string
    {
        return serialize($this);
    }
}