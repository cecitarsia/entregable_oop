<?php

class Adjunto extends Profesor {
  protected $horas;

  public function __construct(string $elNombre, string $elApellido, int $laAntiguedad, int $elCodigo, int $cantHoras)
  {
    parent::__construct( $elNombre, $elApellido, $laAntiguedad, $elCodigo)
		 $this->setHoras($cantHoras);


     public function setHoras($cantHoras) {
       $this->$cantHoras = $cantHoras;
     }

     public function getHoras() {
       return $this->$cantHoras;
     }

}}
