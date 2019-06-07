<?php

class Titular extends Profesor {
  protected $especialidad;

  public function __construct(string $elNombre, string $elApellido, int $laAntiguedad, int $elCodigo, string $laEspecialidad)
  {
    parent::__construct($elNombre, $elApellido, $laAntiguedad, $elCodigo)
		 $this->setEspecialidad($laEspecialidad);



}
}
