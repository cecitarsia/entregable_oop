<?php
// require_once 'autoload';


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
    $this->listaProfesores[] = $elProfesor;
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

	//H.1 -> Crea un curso y lo agrega a la lista de Cursos (¿agregarlo sería instanciarlo?)
	public function altaCurso($nombreCurso, $codigoCurso, $cupoMaximoDealumnos){
		$nombreCurso= getCoursename();
		$codigoCurso= getCoursenumber();
		$cupoMaximoDealumnos= getCupoMaximo();
		}
	// $curso = new curso();
	// $curso->altaCurso()

	//H.2 -> Crea un profesor adjunto y lo agrega a la lista de profesores
	public function altaProfesorAdjunto($nombre, $apellido, $codigoProfesor, $cantidadDeHoras){
		$nombre= getNombre();
		$apellido= getApellido();
		$codigoProfesor= getCodigo();
		$cantidadDeHoras= getHoras();
		}
	// $Adjunto = new Adjunto();
	// $Adjunto->altaProfesorAdjunto()

	//H.3 -> Crea un profesor Titular y lo agrega a la lista de profesores
	public function altaProfesorTitular($nombre, $apellido, $codigoProfesor, $especialidad){
		$nombre= getNombre();
		$apellido= getApellido();
		$codigoProfesor= getCodigo();
		$especialidad= getEspecialidad();
		}

	//H.4 -> Crea un Alumno y lo agrega a la lista de alumnos
	public function altaAlumno($nombre, $apellido, $codigoAlumno){
	  $nombre= getNombre();
		$apellido= getApellido();
		$codigoAlumno= getCodigo();
		}

	}
