<?php

require_once 'profesor.php';

class Adjunto extends Profesor
{
    protected $cantidadDeHoras;

    public function __construct(string $elNombre, string $elApellido, int $laAntiguedad, int $elCodigo, int $cantHoras)
    {
        parent::__construct($elNombre, $elApellido, $laAntiguedad, $elCodigo);
        $this->setHoras($cantHoras);
    }

    public function setHoras($cantHoras)
    {
        $this->cantidadDeHoras = $cantHoras;
    }

    public function getHoras()
    {
        return $this->cantidadDeHoras;
    }

}
