<?php

	abstract class DigitalHouseManager
	{
		protected $listaAlumnos = [];
		protected $listaProfesores = [];
		protected $listaCursos = [];


		public function setlistaAlumnos($elAlumno)
		{
			$this->listaAlumnos[] = $elAlumno;
		}

		public function getlistaAlumnos()
		{
			return $this->listaAlumnos;
		}


  public function setlistaProfesores($elProfesor)
  {
    $this->listaProfesors[] = $elProfesor;
  }

  public function getlistaProfesores()
  {
    return $this->listaProfesores;
  }


  public function setlistaCursos($elCurso)
  {
    $this->listaCursos[]= $elCurso;
  }

  public function getlistaCursos()
  {
    return $this->listaCursos;
  }


}
