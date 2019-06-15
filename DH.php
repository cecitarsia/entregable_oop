<?php
require_once 'autoload.php';
require_once 'DigitalHouseManager.php';

$manager = new DigitalHouseManager;

$profesorTitular1 = $manager->altaProfesorTitular("Juan", "Perez", 01,"Full Stack");
$profesorTitular2 = $manager->altaProfesorTitular("Jose", "Rodriguez", 02,"Android");
$profesorAdjunto1 = $manager->altaProfesorAdjunto("Maria", "Lopez", 20, 25);
$profesorAdjunto2 = $manager->altaProfesorAdjunto("Julia", "Gomez", 21, 35);
$cursoFullStack = $manager->altaCurso("Full Stack", 20001, 3);
$cursoAndroid = $manager->altaCurso("Android", 20002, 2);

$manager->asignarProfesores(20001, 01,20);
$manager->asignarProfesores(20002, 02,21);


var_dump ($profesorTitular1);
var_dump ($profesorTitular2);
var_dump ($cursoFullStack);








































 ?>
