<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'autoload.php';

$manager = new DigitalHouseManager;

// Crear profesores
$profesorTitular1 = $manager->altaProfesorTitular("Juan", "Perez", 1, 1, "Full Stack");
$profesorTitular2 = $manager->altaProfesorTitular("Jose", "Rodriguez", 1, 2,"Android");
$profesorAdjunto1 = $manager->altaProfesorAdjunto("Maria", "Lopez", 2, 20, 25);
$profesorAdjunto2 = $manager->altaProfesorAdjunto("Julia", "Gomez", 2,21, 35);

// Crear cursos
$cursoFullStack = $manager->altaCurso("Full Stack", 20001, 3);
$cursoAndroid = $manager->altaCurso("Android", 20002, 2);

// Crear alumnos
$alumno1 = $manager->altaAlumno("Cecilia", "Tarsia", 32);
$alumno2 = $manager->altaAlumno("Pepe", "Torsio", 33);
$alumno3 = $manager->altaAlumno("Luna", "Hitler", 34);

// Asignar profesores a cursos
$manager->asignarProfesores(20001, 1,20);
$manager->asignarProfesores(20002, 2,21);

// Inscribir alumnos a cursos
$manager->inscribirAlumno(32, 20001);
$manager->inscribirAlumno(33, 20001);

$manager->inscribirAlumno(32, 20002);
$manager->inscribirAlumno(34, 20002);

$manager->inscribirAlumno(32, 20002);
$manager->inscribirAlumno(33, 20002);

$cursoFullStack->eliminarAlumno($alumno3);

var_dump ($cursoFullStack);
$cursoFullStack->eliminarAlumno($alumno2);
var_dump ($cursoFullStack);

//var_dump ($profesorTitular1);
//var_dump ($profesorTitular2);
//var_dump ($cursoFullStack);
//var_dump ($alumno1);








































 ?>
