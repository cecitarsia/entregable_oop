<?php

class Adjunto extends Profesor {
  protected $horas;

  public function __construct(string $elNombre, string $elApellido, int $laAntiguedad, int $elCodigo, int $cantHoras)
  {
    parent::__construct( $elNombre, $elApellido, $laAntiguedad, $elCodigo)
		 $this->setHoras($cantHoras);




}}
