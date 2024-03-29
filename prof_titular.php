<?php

require_once 'profesor.php';

class Titular extends Profesor
{
    protected $especialidad;

    public function __construct(string $elNombre, string $elApellido, int $laAntiguedad, int $elCodigo, string $laEspecialidad)
    {
        parent::__construct($elNombre, $elApellido, $laAntiguedad, $elCodigo);
        $this->setEspecialidad($laEspecialidad);
    }

    public function getEspecialidad()
    {
        return $this->especialidad;
    }

    public function setEspecialidad($laEspecialidad)
    {
        $this->especialidad = $laEspecialidad;
    }

}
