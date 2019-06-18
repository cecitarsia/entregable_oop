<?php

class Curso
{
    protected $nombreCurso;
    protected $codigoCurso;
    protected $ProfesorTitular;
    protected $ProfesorAdjunto;
    protected $CupoMaximo;
    protected $Alumnos = [];

    public function __construct(string $elNombreCurso, int $elCodigoCurso, int $CupoMaximo)
    {
        $this->setCoursename($elNombreCurso);
        $this->setCoursenumber($elCodigoCurso);
        $this->setCupoMaximo($CupoMaximo);
    }

    public function setCoursename($elNombreCurso)
    {
        $this->nombreCurso = $elNombreCurso;
    }

    public function setCoursenumber($elCodigoCurso)
    {
        $this->codigoCurso = $elCodigoCurso;
    }

    public function getCoursename()
    {
        return $this->nombreCurso;
    }

    public function getCoursenumber()
    {
        return $this->codigoCurso;
    }

    public function getProfesorTitular()
    {
        return $this->ProfesorTitular;
    }

    public function setProfesorTitular($elProfesorTitular)
    {
        $this->ProfesorTitular = $elProfesorTitular;
    }

    public function getProfesorAdjunto()
    {
        return $this->ProfesorAdjunto;
    }

    public function setProfesorAdjunto($elProfesorAdjunto)
    {
        $this->ProfesorAdjunto = $elProfesorAdjunto;
    }

    public function getCupoMaximo()
    {
        return $this->CupoMaximo;
    }

    public function setCupoMaximo($elCupoMaximo)
    {
        $this->CupoMaximo = $elCupoMaximo;
    }

    public function getAlumnos()
    {
        return $this->Alumnos;
    }

    public function listarAlumnos()
    {
        $ListaDeAlumnos = getAlumnos();
        echo "<ul>";
        foreach ($ListaDeAlumnos as $Alumno) {
            echo "<li> $Alumno </li>";
        }
        echo "</ul>";
    }

    public function agregarAlumno($unAlumno)
    {
        $ListaDeAlumnos = $this->getAlumnos();
        $CupoMaximo = $this->getCupoMaximo();
        if (count($ListaDeAlumnos) < $CupoMaximo) {
            $this->Alumnos[] = $unAlumno;
            return true;
        }

        return false;
    }

    public function eliminarAlumno(Alumno $unAlumno)
    {
        $key = array_search($unAlumno, $this->Alumnos);
        if ($key !== false) {
            unset($this->Alumnos[$key]);
            echo "¡Eliminación exitosa del alumno!";
            return true;
        }
        echo "<br> No se eliminó el alumno";
        return false;
    }

    public function listarProfesores()
    {
        $ProfesorTitular = $this->getProfesorTitular();
        $ProfesorAdjunto = $this->getProfesorAdjunto();
        $NombreProfesorTitular = $ProfesorTitular->getNombre();
        $NombreProfesorAdjunto = $ProfesorAdjunto->getNombre();
        echo "<ul>";
        echo "<li> Profesor Titular: $NombreProfesorTitular </li>";
        echo "<li> Profesor Adjunto: $NombreProfesorAdjunto </li>";
        echo "</ul>";
    }
}
