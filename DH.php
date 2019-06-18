<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

require_once 'autoload.php';

$manager = new DigitalHouseManager;



// Crear profesores

$profesorTitular1 = $manager->altaProfesorTitular("Juan", "Perez", 1, 1, "Full Stack");
$profesorTitular2 = $manager->altaProfesorTitular("Jose", "Rodriguez", 2, 2,"Android");
$profesorAdjunto1 = $manager->altaProfesorAdjunto("Maria", "Lopez", 3, 20, 25);
$profesorAdjunto2 = $manager->altaProfesorAdjunto("Julia", "Gomez", 4,21, 35);

// Crear cursos

$cursoFullStack = $manager->altaCurso("Full Stack", 20001, 3);
$cursoAndroid = $manager->altaCurso("Android", 20002, 2);

// Crear alumnos

$alumno1 = $manager->altaAlumno("Cecilia", "Tarsia", 32);

$alumno2 = $manager->altaAlumno("Pepe", "Torsio", 33);

$alumno3 = $manager->altaAlumno("Luna", "Hitler", 34);

// Asignar profesores a cursos
$manager->asignarProfesores(20001,1,3);
$manager->asignarProfesores(20002,2,4);

// Inscribir alumnos a cursos
echo "PARTE J - Ejercicio 6:  Inscribir a dos alumnos en el curso de Full Stack. <br>";
$manager->inscribirAlumno(32, 20001);
echo "<br>";
$manager->inscribirAlumno(33, 20001);
echo "<hr> PARTE J - Ejercicio 7:  Inscribir a dos alumnos en el curso de Android. <br> ";
$manager->inscribirAlumno(32, 20002);
echo "<br>";
$manager->inscribirAlumno(34, 20002);
echo "<hr> PARTE J - Ejercicio 8:  Inscribir a tres alumnos más en el curso de Android. <br> ";
$manager->inscribirAlumno(32, 20002);
echo "<br>";
$manager->inscribirAlumno(33, 20002);
echo "<br>";
$manager->inscribirAlumno(33, 20002);
echo "<hr>";



function debug($dato) {
  echo "<pre>";
  var_dump($dato);
  echo "</pre>";
  }

echo "Resultado Curso Full Stack";
debug($cursoFullStack);
echo "<hr>";
echo "Resultado Curso Android";
debug($cursoAndroid);
echo "<hr>";
echo "ADICIONALES - Eliminar un Alumno <br><br>";
echo "Se elimina el Alumno 33 <br>";
$cursoFullStack->eliminarAlumno($alumno2);

echo "<br> Nuevo resultado Curso Full Stack <br>";
debug ($cursoFullStack);
echo "<hr>";
echo "Se elimina el Curso Android <br>";
$manager->BajaCurso(20002);
echo "<br>Nuevo listado de Cursos<br>";
debug ($manager->getListaCursos());

echo "<hr>";
echo "Se elimina el profesor 4 <br>";
$manager->BajaProfesor(4);
echo "<br>Nuevo listado de profesores<br>";
debug ($manager->getListaProfesores());












































 ?>
