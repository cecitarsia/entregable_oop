<?php

class Profesor
{
    protected $nombre;
    protected $apellido;
    protected $antiguedad;
    protected $codigo;

    public function __construct(string $elNombre, string $elApellido, int $laAntiguedad, int $elCodigo)
    {
        $this->setNombre($elNombre);
        $this->setApellido($elApellido);
        $this->setAntiguedad($laAntiguedad);
        $this->setCodigo($elCodigo);
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($elNombre)
    {
        $this->nombre = $elNombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($elApellido)
    {
        $this->apellido = $elApellido;
    }

    public function getAntiguedad()
    {
        return $this->antiguedad;
    }

    public function setAntiguedad($laAntiguedad)
    {
        $this->antiguedad = $laAntiguedad;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($elCodigo)
    {
        $this->codigo = $elCodigo;
    }
}
