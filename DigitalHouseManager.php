<?php
	require_once 'autoload.php';


class DigitalHouseManager
	{
		protected $listaAlumnos = [];
		protected $listaProfesores = [];
		protected $listaCursos = [];


		public function setListaAlumnos($elAlumno)
		{
			$this->listaAlumnos[] = $elAlumno;
		}

		public function getListaAlumnos()
		{
			return $this->listaAlumnos;
		}


  public function setListaProfesores($elProfesor)
  {
    $this->listaProfesores[] = $elProfesor;
  }

  public function getListaProfesores()
  {
    return $this->listaProfesores;
  }


  public function setListaCursos($elCurso)
  {
    $this->listaCursos[]= $elCurso;
  }

  public function getListaCursos()
  {
    return $this->listaCursos;
  }

	//H.1 -> Crea un curso y lo agrega a la lista de Cursos
	public function altaCurso($nombreCurso, $codigoCurso, $cupoMaximoDeAlumnos){
		$nuevoCurso = new Curso($nombreCurso, $codigoCurso, $cupoMaximoDeAlumnos);
    array_push($this->listaCursos, $nuevoCurso);
    return $nuevoCurso;
		}


	//H.2 -> Crea un profesor adjunto y lo agrega a la lista de profesores
	public function altaProfesorAdjunto($nombre, $apellido, $codigoProfesor, $cantidadDeHoras){
		$nuevoAdjunto = new Adjunto ($nombre, $apellido, 0, $codigoProfesor, $cantidadDeHoras);
    array_push($this->listaProfesores, $nuevoAdjunto);
    return $nuevoAdjunto;
		}


	//H.3 -> Crea un profesor Titular y lo agrega a la lista de profesores
	public function altaProfesorTitular($nombre, $apellido, $codigoProfesor, $especialidad){
		$nuevoTitular = new Titular ($nombre, $apellido, 0, $codigoProfesor, $especialidad);
    array_push($this->listaProfesores, $nuevoTitular);
    return $nuevoTitular;
		}

	//H.4 -> Crea un Alumno y lo agrega a la lista de alumnos
	public function altaAlumno($nombre, $apellido, $codigoAlumno){
		$nuevoAlumno = new Alumno ($nombre, $apellido, $codigoAlumno);
    array_push($this->listaAlumnos, $nuevoAlumno);
    return $nuevoAlumno;
		}

	//I.5 -> Inscribe un alumno a un curso si hay cupo disponible

		//	a. Recorre la lista de cursos y elige el curso
		public function tomarCurso($codigoCurso){
	    foreach ($this->listaCursos as $curso) {
	      if ($curso->getCoursenumber() === $codigoCurso) {
	        return $curso;
	      }
	    }
	  }
		//	b. Recorre la lista de alumnos y elige al alumno
		public function tomarAlumno($codigoAlumno){
			foreach ($this->listaAlumnos as $alumno) {
				if ($alumno->getCodigo() === $codigoAlumno) {
					return $alumno;
				}
			}
		}
		//	b. Recorre la lista de profesores y elige al profesor
		public function tomarProfesor($codigoProfesor){
			foreach ($this->listaProfesores as $Profesor) {
				if ($Profesor->getCodigo() == $codigoProfesor){
				return $Profesor;}}
				echo "No se encuentra el profesor";
				return false;
			}


	public function inscribirAlumno($codigoAlumno, $codigoCurso){
		$curso = $this->tomarCurso($codigoCurso);
		$alumno = $this->tomarAlumno($codigoAlumno);
		if ($curso->agregarAlumno($alumno) == true) {
			echo "¡Inscripción exitosa!";
		}else {
			echo "Se ha alcanzado el cupo máximo de inscripciones a este curso.";
		}
	}

	//I.6 -> Asigna profesores a un curso
	public function asignarProfesores($codigoCurso, $codigoProfesorTitular, $codigoProfesorAdjunto){
	//	a. Busca al profesor titular en la lista de profesores
	$profesorTitular = $this->tomarProfesor($codigoProfesorTitular);
	//	b. Busca al profesor adjunto en la lista de profesores
	$profesorAdjunto = $this->tomarProfesor($codigoProfesorAdjunto);

  //Recorre la lista de cursos y elige el curso
	$curso = $this->tomarCurso($codigoCurso);

	$curso->setProfesorTitular($profesorTitular);
	$curso->setProfesorAdjunto($profesorAdjunto);

	}

	public function BajaCurso($codigoCurso){
		$curso = $this->tomarCurso($codigoCurso);

			$key = array_search($curso, $this->listaCursos);
			if ($key !== false) {
					unset($this->listaCursos[$key]);
					echo "¡Eliminación exitosa!";
					return true;
			}
			echo "<br> No se eliminó el curso";
			return false;
	}
	public function BajaProfesor($codigoProfesor){
		$Profesor = $this->tomarProfesor($codigoProfesor);

			$key = array_search($Profesor, $this->listaProfesores);
			if ($key !== false) {
					unset($this->listaProfesores[$key]);
					echo "¡Eliminación exitosa del profesor!";
					return true;
			}
			echo "<br> No se eliminó el profesor";
			return false;
	}




}
