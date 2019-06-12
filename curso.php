<?php
require_once 'autoload.php';


class Curso{

  private $nombreCurso;
  private $codigoCurso;
  private $ProfesorTitular;
  private $ProfesorAdjunto;
  private $CupoMaximo;
  private $Alumnos = [];


  public function __construct(string $elNombreCurso, int $elCodigoCurso, int $CupoMaximo)
  {
    $this->setCoursename($elNombreCurso);
    $this->setCoursenumber($elCodigoCurso);
    $this->setCupoMaximo($CupoMaximo);
    }

  public function getCoursename(){
		return $this->nombreCurso;
	}

	public function setCoursename($elNombreCurso){
		$this->nombreCurso = $elNombreCurso;
	}

	public function getCoursenumber(){
		return $this->codigoCurso;
	}

	public function setCoursenumber($elCodigoCurso){
		$this->codigoCurso = $elCodigoCurso;
	}

  public function getProfesorTitular(){
		return $this->ProfesorTitular;
	}

	public function setProfesorTitular($elProfesorTitular){
		$this->ProfesorTitular = $elProfesorTitular;
	}

	public function getProfesorAdjunto(){
		return $this->ProfesorAdjunto;
	}

	public function setProfesorAdjunto($elProfesorAdjunto){
		$this->ProfesorAdjunto = $elProfesorAdjunto;
	}

	public function getCupoMaximo(){
		return $this->CupoMaximo;
	}

	public function setCupoMaximo($elCupoMaximo){
		$this->CupoMaximo = $elCupoMaximo;
	}

	public function getAlumnos(){
		return $this->Alumnos;
	}

	public function setAlumnos($elAlumno){
		$this->Alumnos[] = $elAlumno;
	}

  public function listarAlumnos(){
    $ListaDeAlumnos = getAlumnos()
		   echo "<ul>";
      foreach ($ListaDeAlumnos as $Alumno) {
        echo "<li> $Alumno </li>";
      }
        echo "</ul>";
    }



    public function AgregarAlumno($unAlumno){
      $ListaDeAlumnos = getAlumnos();
      $CupoMaximo = getCupoMaximo();
      if (count ($ListaDeAlumnos) < $CupoMaximo){
  		setAlumnos($unAlumno) : false;
  	   }
    }

    public function listarProfesores(){
      $ProfesorTitular = getProfesorTitular()
      $ProfesorAdjunto = getProfesorAdjunto()
         echo "<ul>";
         echo "<li> Profesor Titular: $ProfesorTitular </li>";
         echo "<li> Profesor Adjunto: $ProfesorAdjunto </li>";
         echo "</ul>";
      }
}
